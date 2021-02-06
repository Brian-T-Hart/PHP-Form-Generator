<?php

class Form {
    public $attr;
    public $fields;
    public $id;
    public $name;
    
    public function __construct($id, $name, array $attr = null, array $fields = null) {
        $this->id = $id;
        $this->name = $name;

        if ($attr) {
            $this->attr = $attr;
        }
        if ($fields) {
            $this->fields = $fields;
        }
    }

    public function getStartTag() {
        $html = "<form id=\"$this->id\"";

        foreach($this->attr as $key => $value) {
            $html .= " $key=\"$value\"";
        }

        $html .= '>';

        return $html;
    }

    public function getEndTag() {
        return "</form>";
    }

    public function getFields() {
        return $this->fields;
    }

    public function getName() {
        return $this->name;
    }

    public function getTitle() {
        return "<h2 class=\"form-title\">$this->name</h2>";
    }

    public function getSubmitBtn($value = 'Submit') {
        return "<input name=\"submit\" type=\"submit\" value=\"$value\"/>";
    }

    public function set($property, $value = null) {
        $this->$property = $value;
    }

    public function setFormAttribs($attribs) {
        foreach($attribs as $key => $value) {
            $this->$key = $value;
        }
    }

}