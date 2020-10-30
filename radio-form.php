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

// create form instance
$form = new Form('https://postman-echo.com/post', 'POST', 'Favorite Animal', 'favorite-animal-form', $fields);

// output form
echo $form->getStartTag();
echo $form->getTitle();

foreach($form->getFields() as $field) {
    echo $field->getField();
}

echo $form->getSubmitBtn();
echo $form->getEndTag();

include('includes/footer.php');