<?php

class Form {
    public $action;
    public $fields;
    public $slug;
    public $method;
    public $name;
    
    public function __construct($action, $method, $name, $slug, array $fields = null) {
        $this->action = $action;
        $this->method = $method;
        $this->name = $name;
        $this->slug = $slug;
        if ($fields) {
            $this->fields = $fields;
        }
    }

    public function getStartTag() {
        return "
            <form
                action=\"$this->action\"
                method=\"$this->method\"
                name=\"$this->slug\" 
                id=\"$this->slug\"
            >
        ";
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

    public function setName($name = null) {
        if ($name) {
            $this->name = $name;
        }else {
            $this->name = self::NAME;
        }
    }

    public function set($property, $value = null) {
        $this->$property = $value;
    }

    public function setFormAttribs($attribs) {
        foreach($attribs as $key => $value) {
            $this->$key = $value;
        }
    }

    public function setId($slug) {
        $this->slug = $slug;
    }

}