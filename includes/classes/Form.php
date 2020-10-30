<?php

class Form {
    public $action;
    public $fields;
    public $id;
    public $method;
    public $name;
    
    public function __construct($action, $method, $name, $id, array $fields = null) {
        $this->action = $action;
        $this->method = $method;
        $this->name = $name;
        $this->id = $id;
        if ($fields) {
            $this->fields = $fields;
        }
    }

    public function getStartTag() {
        return "
            <form
                action=\"$this->action\"
                method=\"$this->method\"
                name=\"$this->name\" 
                id=\"$this->id\"
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
        return "<h2>$this->name</h2>";
    }

    public function getSubmitBtn($value = 'Submit') {
        return "<input type=\"submit\" value=\"$value\"/>";
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

    public function setId($id) {
        $this->id = $id;
    }

}