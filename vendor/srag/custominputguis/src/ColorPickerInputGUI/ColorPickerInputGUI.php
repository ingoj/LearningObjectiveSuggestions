<?php

namespace srag\CustomInputGUIs\LearningObjectiveSuggestions\ColorPickerInputGUI;

use ilColorPickerInputGUI;
use srag\CustomInputGUIs\LearningObjectiveSuggestions\Template\Template;
use srag\DIC\LearningObjectiveSuggestions\DICTrait;

/**
 * Class ColorPickerInputGUI
 *
 * @package srag\CustomInputGUIs\LearningObjectiveSuggestions\ColorPickerInputGUI
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ColorPickerInputGUI extends ilColorPickerInputGUI
{

    use DICTrait;

    /**
     * @inheritDoc
     */
    public function render(/*string*/ $a_mode = "") : string
    {
        $tpl = new Template("Services/Form/templates/default/tpl.property_form.html", true, true);

        $this->insert($tpl);

        $html = self::output()->getHTML($tpl);

        $html = preg_replace("/<\/div>\s*<!--/", "<!--", $html);
        $html = preg_replace("/<\/div>\s*<!--/", "<!--", $html);

        return $html;
    }
}
