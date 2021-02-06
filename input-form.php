<?php

require 'includes/classes/Form.php';
require 'includes/classes/Field.php';

include('includes/header.php');

$fields[] = new Field('text', 'username', 'username');
$fields[] = new Field('email', 'email', 'email');
$fields[] = new Field('password', 'password', 'password');
$fields[] = new Field('tel', 'tel', 'tel');
$fields[] = new Field('url', 'url', 'url');
$fields[] = new Field('time', 'time', 'time');
$fields[] = new Field('date', 'date', 'date');
$fields[] = new Field('datetime-local', 'datetime', 'datetime');
$fields[] = new Field('week', 'week', 'week');
$fields[] = new Field('month', 'month', 'month');
$fields[] = new Field('color', 'color', 'color');
$fields[] = new Field('number', 'number', 'number');
$fields[] = new Field('search', 'search', 'search');

// $action = 'https://postman-echo.com/post';

$formAttr = [
    "action" => $_SERVER['PHP_SELF'],
    "method" => "POST",
];

$form = new Form('Form1', 'Input Examples', $formAttr, $fields);

echo $form->getStartTag();
echo $form->getTitle();

foreach($form->getFields() as $field) {
    echo $field->getField();
}

echo $form->getSubmitBtn();
echo $form->getEndTag();

include('includes/footer.php');