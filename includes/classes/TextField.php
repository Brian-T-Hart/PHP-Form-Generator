<?php

class TextField {
    public $description;
    public $error;
    public $id;
    public $name;
    public $slug;
    public $type;
    public $min;
    public $max;
    public $value;

    public function __construct($name, $slug, $description = null) {
        $this->description = $description;
        $this->max = 255;
        $this->min = 1;
        $this->name = $name;
        $this->slug = $slug;
        $this->type = 'text';
    }

    public function getDescription() {
        if ( strlen($this->error) > 0 ) {
            $html = "<div class=\"description warning\">$this->error</div>";
        } else {
            $html = "<div class=\"description\">$this->description</div>";
        }
        return $html;
    }

    public function getField() {
        $html = "<div class=\"field-wrapper text-field\">";
        $html .= $this->getLabel();
        $html .= $this->getTag();
        $html .= $this->getDescription();
        $html .= '</div>';
        return $html;
    }

    public function getLabel() {
        $html = "<label";
        $html .= " for=\"$this->slug\">";
        $html .= ucfirst($this->name);
        $html .= "</label>";
        return $html;
    }

    public function getTag() {
        $html = "<input";
        $html .= " type=\"$this->type\"";
        $html .= " name=\"$this->slug\"";
        $html .= " id=\"$this->slug\"";
        $html .= " value=\"$this->value\"";
        $html .= ">";
        return $html;
    }

    public function set($key, $value) {
        $this->$key = $value;
    }

    public function validate() {
        if (strlen($this->value) < 1) {
            $this->error = 'Please fill in this field';
            return;
        }
        
        if (strlen($this->value) < $this->min) {
            $this->error = 'Must be at least ' . $this->min . ' characters';
            return;
        }

        if (strlen($this->value) > $this->max) {
            $this->error = 'Must be less than ' . $this->$max . ' characters';
            return;
        }

        return;
    }

}