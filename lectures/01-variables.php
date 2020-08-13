<?php

// Variables in php and scopes

// Global
$name = 'jane'; //string
$height = 5.5; // float
$age = 23; //integer
$isEmployed = true; //boolean


// block scope

function printMessage() {
    global $name;
    $age = 30;

    echo "My name is $name and i'm $age years old";
}

printMessage();
