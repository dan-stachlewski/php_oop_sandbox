<?php

/**
 * INSTANCE: a single occurrence of something
 * INSTANCE OOP: a single OBJECT created from a CLASS DEFINITION
 * OBJECT & INSTANCE used interchangably
 * To create an instance we use the 'new': (INSTANTIATE = TO CREATE AN INSTANCE)
 * $person1 = new Person;
 * Usually when we create a new instance of an object we assign it to a var at the same time - thus the var is an instance of the object to be used as needed...
 * $person2 = new Person;
 * Like a while you were out meme pad...
 *
 * get_class($object) - takes an instance as an arg returning the name of the class - pass in instance & get class name
 * is_a($object,$string) - takes in object & string as args & returns true/false if the object has the same class name as the string
 *
 *
 */


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

 }

//Create  NEW INSTANCES of the class
$student1 = new Student;
$student2 = new Student;

//Displays the name of the class
echo get_class($student1) . '<br /><br />';

//Create an array of Class Names
$class_names = ['Product','Student','student'];
//Loop through the array checking to see if the instance name is in the array
foreach($class_names as $class_name){
    //The below function will return a True or False if the instance of $student1 is a Class name or not and print that to the browser
    if(is_a($student1,$class_name)){
        echo "<span style='text-decoration: underline;'>student1</span> <strong>IS</strong> a {$class_name} <br /><br />";
    } else{
        echo "<span style='text-decoration: underline;'>student1</span> <strong>IS NOT</strong> a {$class_name} <br /><br />";
    }
}

?>
