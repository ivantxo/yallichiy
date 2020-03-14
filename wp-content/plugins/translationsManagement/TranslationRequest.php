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
     * @param string $Status
     * @return stdClass array
     */
    public function GetTranslationRequests($Status)
    {
        $query = "
            SELECT *
            FROM wp_custom_translation_request tr
            JOIN wp_custom_client_request cr ON cr.request_id = tr.id
            JOIN wp_custom_client c ON cr.client_id = c.id
            WHERE tr.status = '{$Status}'
        ";
        return $this->WPDatabase->get_results($query);
    }
}
