<?php

/**
 * CLASS PROPERTIES: vars to hold object values
 * Also known as: ATTRIBUTES, CLASS VARIABLES, INSTANCE VARIABLES
 * Define with 'var' followed by $variable_name
 * We can set an initial default value
 *
 * var $first_name;
 * var $employed = false;
 *
 * To use the properties we need to:
 * Create an instance of the object:                            $customer = new Person;
 * Use -> 'arrow notation' to reference/access the property:    $customer->first_name = 'Anna';
 * -> takes care of $ of var
 *
 * = sets avalue
 * -> reading a value
 *
 *
 * We can return data by:
 * echo $customer->first_name;
 * Which Prints: //Anna
 *
 * Each of the Instances we create will be different & unique - where OOP gets its power...
 *
 * get_class_vars($string) - returns a list of properties defined within  the class - dont need an instace of the class to access these properties, just call name of the class using a string
 * get_object_vars($object) - does the same thing as get_class_vars however it takes in an instance of an object - they basically return the same info except get_class_vars() will return the default values of the class while get_object_vars() will get the current values of the class
 * property_exists($mixed,$string) which returns true or false depending on whether the property exists within the class or on the object - $mixed can be a class name as a string or an object instance, the $string is the object property we want to check for
 *
 */

//Defining a class
 class Student {

    //Add Class Properties here
    var $first_name;
    var $last_name;
    var $country = 'None';

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

$class_vars = get_class_vars('Student');
echo '<strong>Class Variables: </strong><br />';
echo '<pre>';
print_r($class_vars);
echo '</pre>';

$object_vars = get_object_vars($student1);
echo '<strong>Object Variables: </strong><br />';
echo '<pre>';
print_r($object_vars);
echo '</pre>';

//B/c this is boolean we need to use an if stmnt to print out what happens if true & false.
//*** TO DO ***
//Create a function/method that rotates through all the properties and advise if the exist or not...
if(property_exists('Student','first_name')){
    echo 'Property first_name exists in Student Class.<br />';
} else {
    echo 'Property first_name does not exist in Student Class.<br />';
}



?>
