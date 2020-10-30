<?php

class Field {
    public $description;
    public $id;
    public $name;
    public $type;
    

    public function __construct($type, $name, $id, $description = null) {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->description = $description;

    }

    public function getName() {
        return $this->name;
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
        $html .= " id=\"$this->id\"";
        $html .= ">";
        return $html;
    }

    public function getField() {
        $html = "<div class=\"field-wrapper\">";
        $html .= $this->getLabel();
        $html .= $this->getTag();
        $html .= $this->getDescription();
        $html .= '</div>';
        return $html;
    }
}