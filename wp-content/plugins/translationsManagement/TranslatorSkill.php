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
     * @return array
     */
    public function GetTranslatorsSkills()
    {
        $parsedTranslatorsSkills = [];
        $query = "
            SELECT t.id, t.name, t.surname, t.phone, t.email, ts.source_language, ts.target_language
            FROM wp_custom_translator_skill ts
            JOIN wp_custom_translator t ON ts.translator_id = t.id
            ORDER BY t.id ASC
        ";
        $translatorSkills = $this->WPDatabase->get_results($query);
        if (!empty($translatorSkills)) {
            foreach ($translatorSkills as $translatorSkill) {
                $translatorID = $translatorSkill->id;
                if (!isset($parsedTranslatorsSkills[$translatorID])) {
                    $parsedTranslatorsSkills[$translatorID] = new stdClass();
                    $parsedTranslatorsSkills[$translatorID]->id = $translatorID;
                    $parsedTranslatorsSkills[$translatorID]->name = $translatorSkill->name;
                    $parsedTranslatorsSkills[$translatorID]->surname = $translatorSkill->surname;
                    $parsedTranslatorsSkills[$translatorID]->phone = $translatorSkill->phone;
                    $parsedTranslatorsSkills[$translatorID]->email = $translatorSkill->email;
                    $parsedTranslatorsSkills[$translatorID]->skills = [
                        $translatorSkill->source_language . ' to ' . $translatorSkill->target_language
                    ];
                } else {
                    $parsedTranslatorsSkills[$translatorID]->skills = array_merge(
                        $parsedTranslatorsSkills[$translatorID]->skills,
                        [$translatorSkill->source_language . ' to ' . $translatorSkill->target_language]
                    );
                }
            }
        }
        return $parsedTranslatorsSkills;
    }
}
