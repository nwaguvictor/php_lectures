<?php 

// data types in php

$empty_variable = null;
$integer_variable = 10;
$float_variable = 10.6;

$string_variable = 'string';
$is_complete = true;

$array_variable = [1,2,3,4,5,6,7,8,9];

$class_variable = new stdClass();

// Casting array to object
$class_variable2 = (object) ['name' => 'jane'];

var_dump($class_variable2->name);

