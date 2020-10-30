<?php

class RadioField {
    public $description;
    public $id;
    public $name;
    public $type;
    
    

    public function __construct($name, $id, Array $options, $description = null) {
        $this->id = $id;
        $this->description = $description;
        $this->name = $name;
        $this->options = $options;
        $this->type = 'radio';
    }

    public function getLabel() {
        $html = "<label";
        $html .= " for=\"$this->id\">";
        $html .= ucfirst($this->name);
        $html .= "</label>";
        return $html;
    }

    public function getDescription() {
        $html = "<div class=\"description\">$this->description</div>";
        return $html;
    }

    public function getTag() {
        $html = "<input";
        $html .= " type=\"$this->type\"";
        $html .= " name=\"$this->name\"";
        $html .= ">";
        return $html;
    }

    public function getField() {
        $html = "<div class=\"field-wrapper radio-field\" id=\"$this->id\">";
        $html .= "<p>$this->description</p>";
        foreach ($this->options as $key => $value) {
            $html .= "<div>";
            $html .= "<input type=\"$this->type\" name=\"$this->name\" id=\"$value\" value=\"$value\">";
            $html .= "<label class=\"radio-label\" for=\"$this->name\">$value</label>";
            $html .= "</div>";
        }
        $html .= '</div>';
        return $html;
    }
}