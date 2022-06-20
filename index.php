<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables
function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}
whatIsHappening();

// TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'Joker IPA', 'price' => 5],
    ['name' => 'Caesar Augustus', 'price' => 4.5],
    ['name' => 'Birds & Bees', 'price' => 4.5],
    ['name' => 'Seven Giraffes', 'price' => 5],
    ['name' => 'Fraoch', 'price' => 5],
    ['name' => 'Nth Degree', 'price' => 6],
];

$totalValue = 0;


// define inputs
$email = $_POST["email"];
$street = $_POST["street"];
$housenumber = $_POST["streetnumber"];
$city = $_POST["city"];
$zipcode = $_POST["zipcode"];


function validate()
{
    // TODO: This function will send a list of invalid fields back
    return [];
}

function handleForm()
{
    // TODO: form related tasks (step 1)
    //    foreach ($products as $product=>$price) 





    // Validation (step 2)
    // $invalidFields = validate();
    // if (!empty($invalidFields)) {
    //     // TODO: handle errors
    // } else {
    //     // TODO: handle successful submission
    // }
}

// TODO: replace this if by an actual check
$formSubmitted = false;
if (isset($_POST["submit"])) {
    handleForm();
}

require 'form-view.php';
