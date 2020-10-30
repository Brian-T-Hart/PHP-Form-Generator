<?php

require 'includes/classes/Form.php';
require 'includes/classes/Field.php';

include('includes/header.php');

// create field instances
$fields[] = new Field('email', 'email', 'email', 'enter your email address');
$fields[] = new Field('password', 'password', 'password', 'enter your password');

// create form instance
$form = new Form('https://postman-echo.com/post', 'POST', 'Login', 'login-form', $fields);

// output form
echo $form->getStartTag();
echo $form->getTitle();

foreach($form->getFields() as $field) {
    echo $field->getField();
}

echo $form->getSubmitBtn('Log In');
echo $form->getEndTag();

include('includes/footer.php');