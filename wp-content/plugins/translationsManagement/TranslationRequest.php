<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 15/03/20
 * Time: 6:22 AM
 */

class TranslationRequest
{
    private $WPDatabase;

    public function __construct()
    {
        global $wpdb;
        $this->WPDatabase = $wpdb;
    }

    /**
     * @param string $status
     * @param bool $translatorColumns
     * @return stdClass array
     */
    public function getRequestsByStatus($status, $translatorColumns=false)
    {
        if ($translatorColumns) {
            $translatorColumns = "
                t.name AS translator_name,
                t.surname AS translator_surname,
                t.phone AS translator_phone,
                t.email AS translator_email
            ";
            $queryBody = str_replace("%translator_data%", ', ' . $translatorColumns, $this->getRequestsQueryBody());
            $queryBody .= "JOIN wp_custom_translator t ON t.id = cr.translator_id ";
        } else {
            $queryBody = str_replace("%translator_data%", "", $this->getRequestsQueryBody());
        }
        $query = $queryBody . "WHERE tr.status = '{$status}'";
        return $this->WPDatabase->get_results($query);
    }

    /**
     * @param int $requestID
     * @return array
     */
    public function getRequest($requestID)
    {
        $translatorColumns = "
            t.name AS translator_name,
            t.surname AS translator_surname,
            t.phone AS translator_phone,
            t.email AS translator_email
        ";
        $queryBody = str_replace("%translator_data%", ', ' . $translatorColumns, $this->getRequestsQueryBody());
        $query = $queryBody . "
            JOIN wp_custom_translator t ON t.id = cr.translator_id 
            WHERE tr.status = 'assigned'
            AND cr.request_id = {$requestID}
        ";
        return $this->WPDatabase->get_row($query);
    }

    /**
     * @return string
     */
    private function getRequestsQueryBody()
    {
        $query = "
            SELECT %translation_request_data% %translator_data%
            FROM wp_custom_translation_request tr
            JOIN wp_custom_client_request cr ON cr.request_id = tr.id
            JOIN wp_custom_client c ON cr.client_id = c.id 
        ";
        $translationRequestColumns = "
            tr.id,
            tr.type,
            tr.source_language,
            tr.target_language,
            c.name,
            c.surname,
            c.phone,
            c.email,
            tr.created";
        return str_replace("%translation_request_data%", $translationRequestColumns, $query);
    }

    /**
     * @param int $requestID
     * @param int $translatorID
     */
    public function assignTranslator($requestID, $translatorID)
    {
        $query = "
            UPDATE
              wp_custom_client_request
            SET
              translator_id = {$translatorID}
            WHERE
              request_id = {$requestID}
        ";
        $this->WPDatabase->query($query);
    }

    /**
     * @param int $requestID
     * @param string $status
     */
    public function updateStatusRequest($requestID, $status)
    {
        $query = "
            UPDATE
                wp_custom_translation_request
            SET
                status = '{$status}'
            WHERE
                id = {$requestID}
        ";
        $this->WPDatabase->query($query);
    }
}
