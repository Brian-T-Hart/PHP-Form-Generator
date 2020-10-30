<?php

class SelectField {
    public $description;
    public $id;
    public $name;

    public function __construct($name, $id, Array $options, $description = null) {
        $this->id = $id;
        $this->description = $description;
        $this->name = $name;
        $this->options = $options;
    }

    public function getField() {
        $html = "<div class=\"field-wrapper select-field\" id=\"$this->id" . "-wrapper\">";
        $html .= "<label for=\"$this->id\">$this->description</label>";
        $html .= "<select name=\"$this->name\" id=\"$this->id\">";
        $html .= "<option value> --select-- </option>";
        foreach ($this->options as $key => $value) {
            $html .= "<option value=\"$value\">$value</option>";
        }
        $html .= '</select>';
        $html .= '</div>';
        return $html;
    }
}