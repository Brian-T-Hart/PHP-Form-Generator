<?php

require 'includes/classes/Form.php';
require 'includes/classes/Field.php';
require 'includes/classes/RadioField.php';

include('includes/header.php');

$id = 'favorite-animal';
$name = 'favorite-animal';
$options = ['cat', 'dog', 'hamster', 'rabbit'];
$description = 'Choose your favorite animal';


// create field instances
$fields[] = new RadioField($name, $id, $options, $description);

$formAttr = [
    "action" => "https://postman-echo.com/post",
    "method" => "POST",
    "target" => "_blank",
];

// create form instance
$form = new Form('favorite-animal-form', 'Favorite Animal', $formAttr, $fields);

// output form
echo $form->getStartTag();
echo $form->getTitle();

foreach($form->getFields() as $field) {
    echo $field->getField();
}

echo $form->getSubmitBtn();
echo $form->getEndTag();

include('includes/footer.php');