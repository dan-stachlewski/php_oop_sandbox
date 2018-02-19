<?php

/**
 * CLASS BEST PRACTICES:
 * capitalize & CamelCase class names
 * Make Nouns Singular
 * Define each Class in a separate File with the Same Name
 * Group Class files in a DIR Classes
 *
 * get_declared_classes() - PHP keeps track of declared classes, we can use the get_declared_classes() function to return an array of classes PHP is aware of
 *
 * class_exists($string) - takes a string as an arg and returns true/false depending on whether the class is in the array of declared classes
 *
 */

//How to define a Class
class Student {



}

// The below code assigns all the declared classes in the array to the variable $classes
$classes = get_declared_classes();
//The below code takes the array and turns it into a string where each class is separated by a comma & a space
echo 'Classes: ' . implode(', ',$classes) . '<br /><br />';

//Create a new array of 3 classes
$class_names = ['Product','Student','student'];
//Loop through the array
foreach($class_names as $class_name){
    //Test each array item to see if it has been declared
    if(class_exists($class_name)){
        //If delared print that out
        echo "<span style='text-decoration: underline;'>{$class_name}</span> <strong>IS</strong> a declared class!<br /><br />";
    } else {
        //If not delared print that out
        echo "<span style='text-decoration: underline;'>{$class_name}</span> <strong>IS NOT</strong> a declared class!<br /><br />";
    }
}

// *** RESULT: ***
// Student & student should return true - class_exists() is case insensitive
// Product should return false


?>
