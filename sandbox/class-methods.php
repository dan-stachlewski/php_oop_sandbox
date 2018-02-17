<?php

/**
 * CLASS METHODS:
 * Are functions that perform the Objects Actions
 * In procedureal PHP = functions
 * In PHP OOP = methods when referencing classes
 * Defined in Class like a regular function
 * How we refer to functions/methods from classes:
 *
 * echo $customer->say_hello(); - the () = method (without () they would be properties)
 *
 * get_class_methods($mixed) - pass in either class name as a string or instance of an object - returning the methods available
 * method_exists($mixed,$string) - pass in either class name as a string or instance of an object - the second arg would be the method that you want to know if it exists or not
 *
 *
 */

//Defining a class
 class Student {

    //Add Class Properties here
    var $first_name;
    var $last_name;
    var $country = 'None';

    function say_hello(){
        return 'Hello World!';
    }

 }

//Create  NEW INSTANCES of the class
$student1 = new Student;

//Set $student1 Object Instance Properties
$student1->first_name = 'Lucy';
$student1->last_name = 'Ricardo';
$student1->country = 'America';

$student2 = new Student;

//Set $student1 Object Instance Properties
$student2->first_name = 'Ethel';
$student2->last_name = 'Mertz';
$student2->country = 'England';

//Retrieve & Display Properties:
echo '<strong>Full Name: </strong>' . $student1->first_name . ' ' . $student1->last_name . '.<br />';
echo '<strong>Country of Origin: </strong>' . $student1->country . '.<br /><br />';
echo '<strong>Full Name: </strong>' . $student2->first_name . ' ' . $student2->last_name . '.<br />';
echo '<strong>Country of Origin: </strong>' . $student2->country . '.<br /><br />';

echo $student1->say_hello() . '<br />';
echo $student2->say_hello() . '<br />';

$class_methods = get_class_methods('Student');
echo '<strong>Class Methods: </strong>' . implode(', ',$class_methods) . '<br />';


//B/c this is boolean we need to use an if stmnt to print out what happens if true & false.
//*** TO DO ***
//Create a function/method that rotates through all the methods and advise if they exist or not...
if(method_exists('Student','say_hello')){
    echo 'Property say_hello() exists in Student Class.<br />';
} else {
    echo 'Property say_hello() does not exist in Student Class.<br />';
}



?>
