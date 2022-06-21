<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

$products = [
    ['name' => 'Joker IPA', 'price' => 5],
    ['name' => 'Caesar Augustus', 'price' => 4.5],
    ['name' => 'Birds & Bees', 'price' => 4.5],
    ['name' => 'Seven Giraffes', 'price' => 5],
    ['name' => 'Fraoch', 'price' => 5],
    ['name' => 'Nth Degree', 'price' => 6],
];

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

$totalValue = 0;


// define inputs
// $email = $_POST["email"];
// $street = $_POST["street"];
// $housenumber = $_POST["streetnumber"];
// $city = $_POST["city"];
// $zipcode = $_POST["zipcode"];
// $productsOrdered = $_POST["products"];
// var_dump($productsOrdered);
// var_dump($productsOrdered[0]);


function validate()
{
    // TODO: This function will send a list of invalid fields back
    return [];
}

function handleForm($products)
{
    $email = $_POST["email"];
    $street = $_POST["street"];
    $housenumber = $_POST["streetnumber"];
    $city = $_POST["city"];
    $zipcode = $_POST["zipcode"];


    // empty box check
    if (isset($email)) {
        echo '<div class="alert alert-danger" role="alert">
        Please enter your email address!</div>';
    }
    if (isset($street)) {
        echo '<div class="alert alert-danger" role="alert">
        Please enter your street!</div>';
    }
    if (isset($housenumber)) {
        echo '<div class="alert alert-danger" role="alert">
        Please enter your house number!</div>';
    }
    if (isset($city)) {
        echo '<div class="alert alert-danger" role="alert">
        Please enter your City!</div>';
    }
    if (isset($zipcode)) {
        echo '<div class="alert alert-danger" role="alert">
        Please enter your zipcode!</div>';
    }
    else {
             
        echo "<div id='userInfoDisplay'>
        <p>Your email is: <b>" . $email . "</b></p>
        <p>Your delivery address is: <b>" . $street . " " . $housenumber . ", " . $city . " " . $zipcode . "</b></p>
        </div>";
        
        
        
        
        $totalPrice = 0; // error if not initialized in the func.
        echo "<h4 style='color: red'> YOU ORDERED:</br></h4>";
        // TODO: form related tasks (step 1)   ---- take from 87 on form
        foreach ($_POST["products"] as $i => $selectedProduct) {
            
            echo "<p style='color: red'>" . $products[$i]["name"] . " &euro;" . $products[$i]["price"] . "</p>";
            $totalPrice += $products[$i]["price"]; // Arithmetic Assignment Operators - https://www.php.net/manual/en/language.operators.assignment.php
            
        }
        // print after the loop ^
        echo "<p style='color: red'><strong>Total Price:</strong> &euro;" . $totalPrice . "</br></p>";
    }
}


// TODO: replace this if by an actual check
$formSubmitted = false;
if (isset($_POST["products"])) {
    handleForm($products);
}

require 'form-view.php';
