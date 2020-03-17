<?php

require_once (ABSPATH . 'wp-content/plugins/translationsManagement/TranslationRequest.php');
require_once (ABSPATH . 'wp-content/plugins/translationsManagement/TranslatorSkill.php');

class TranslationsManagement
{
    private $TranslationRequest;
    private $TranslatorSkill;

    public function __construct()
    {
        // Short-Codes
        add_shortcode('render-main-page', [$this, 'renderMainPage']);
        add_shortcode('render-admin-management', [$this, 'renderAdminManagement']);

        // Access to other classes
        $this->TranslationRequest = new TranslationRequest();
        $this->TranslatorSkill = new TranslatorSkill();
    }

    /**
     * @param array $attributes
     * @return string
     */
    public function renderMainPage($attributes)
    {
        $default_attributes = [
            'show_title' => false
        ];
        $attributes = shortcode_atts($default_attributes, $attributes);
        return $this->getTemplateHtml('mainPage', $attributes);
    }

    /**
     * @param array $attributes
     * @return string
     */
    public function renderAdminManagement($attributes)
    {
        $default_attributes = [
            'show_title' => false,
            'requests' => $this->TranslationRequest->GetTranslationRequests('requested'),
            'translators' => $this->TranslatorSkill->GetTranslatorsSkills(),
        ];
        $attributes = shortcode_atts($default_attributes, $attributes);
        return $this->getTemplateHtml('adminManagement', $attributes);
    }

    /**
     * Renders the contents of the given template to a string and returns it.
     * @param string $template_name The name of the template to render (without .php)
     * @param array $attributes The PHP variables for the template
     * @return string The contents of the template.
     */
    private function getTemplateHtml($template_name, $attributes=null)
    {
        if (!$attributes) {
            $attributes = [];
        }
        ob_start();
        require('templates/' . $template_name . '.php');
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    }

    public function runCustomFunction($key)
    {
        $testCase = get_option('runOnce');
        if (isset($testCase[$key]) && $testCase[$key]) {
            return false;
        } else {
            $testCase[$key] = true;
            update_option('runOnce', $testCase);
            return true;
        }
    }

    public function clearRunCustomFunction($key)
    {
        $testCase = get_option('runOnce');
        if (isset($testCase[$key])) {
            unset($testCase[$key]);
        }
        update_option('runOnce',$testCase);
    }
}
