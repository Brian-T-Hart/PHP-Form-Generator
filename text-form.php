<?php

require 'includes/classes/Form.php';
require 'includes/classes/TextField.php';

include('includes/header.php');

// instantiate the fields
$name = 'First Name';
$slug = 'first-name';
$description = 'Enter your first name';

$fields[] = new TextField($name, $slug, $description);
$fields[] = new TextField('Last Name', 'last-name', 'Enter your last name');

// instantiate the form
$action = htmlspecialchars($_SERVER["PHP_SELF"]);
$method = 'POST';
$name = 'TextField Examples';
$slug = 'text-field-examples';
$form = new Form($action, $method, $name, $slug, $fields);

// Do something upon form submission
if (isset($_POST['submit'])) {
    foreach($fields as $field) {
        $field->set( 'value', isset($_POST[$field->slug]) ? $_POST[$field->slug] : '' );
        $field->validate();

        if ($field->error) {
            $errors[] = $field->error;
        }
        
    }

    if (empty($errors)) {
        echo 'Form submitted successfully';

        foreach($fields as $field) {
            $field->set( 'value', '' );
        }
    }
    
}

// display the form
echo $form->getStartTag();
echo $form->getTitle();

foreach($form->getFields() as $field) {
    echo $field->getField();
}

echo $form->getSubmitBtn();
echo $form->getEndTag();

include('includes/footer.php');