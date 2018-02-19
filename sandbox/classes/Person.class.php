<?php

//Define Class
class Person{

    //Define Properties
    var $first_name;
    var $last_name;

    //Define Method that generates Full Name
    function full_name(){
        //return $first_name . ' ' . $last_name;
        return $this->first_name . ' ' . $this->last_name;
    }
}

//Create instance of Person and assign to var $p - now we can use $p to refer to 'this instance' from now on...
$p = new Person;
//Assign properties to this instance $p
$p->first_name = 'Jack';
$p->last_name = 'the Ripper';

// ERROR: Undefined property: Person::$full_name
// Undefined vars for $first_name & $last_name
// This occurs b/c $first_name & $last_name are simple vars in PHP & PHP doesn't know that it is looking for an OBJECT & thus the properties for that object.
//Thus we need a way for the $full_name Method to refer to 'this' current instance of the Object & it's assigned properties


//Make sure you add () at the end otherwise it will throw an error as it is no longer a property
echo $p->full_name();

//OUTSIDE the Class we use: $var->
//INSIDE the Class we use: $this-> meaning we use this-> Objects instance to get the object's properties or the object's methods.
// -> 'arrow notation' is how we know we are working in an OOP way
// Refer to an Instance: 1:47min. (it's a way to refer to THIS CURRENT INSTANCE)


?>
