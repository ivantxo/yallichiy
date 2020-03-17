<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 17/03/20
 * Time: 7:52 PM
 */

class TranslatorSkill
{
    private $WPDatabase;

    public function __construct()
    {
        global $wpdb;
        $this->WPDatabase = $wpdb;
    }

    /**
     * @return stdClass array
     */
    public function GetTranslatorsSkills()
    {
        $query = "
            SELECT t.id, t.name, t.surname, t.phone, t.email, ts.source_language, ts.target_language
            FROM wp_custom_translator_skill ts
            JOIN wp_custom_translator t ON ts.translator_id = t.id
            ORDER BY t.id ASC
        ";
        return $this->WPDatabase->get_results($query);
    }
}
