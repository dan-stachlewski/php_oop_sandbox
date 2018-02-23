<?php

/**
 * INHERITANCE:
 * When NEW CLASS takes on the PROPERTIES & METHODS of an existing class
 * Why use in heritance?
 * - Organises your code
 * - Prevents repitition
 * - Simplifies maintenance
 * - Prevents inconsistencies & bugs
 *
 * CLASS INHERITANCE:
 * BEHAVIOURS (= PROPERTIES & METHODS) of a class are shared with SUBCLASSES
 * ADD NEW behaviours to parent class & all SUBCLASSES gain them
 * SUBCLASSES can OVERRIDE parent behaviour
 * SUBCLASSES can EXTEND oarent behaviour
 * parent class: Document
 * sub-classes: ProductBrochure & WarrantyDocument
 *
 * ALways declare Parent Class first.
 *
 * get_parent_class($mixed) - can take name of class or object instance of class as args advising which class is the parent class of the sub-class
 * is_sublcass_of($mixed,$string) - can also take the name of the class or object instance as 1st arg & then parent class name as string
 * class_parents($mixed)  - can also take the name of the class or object instance as arg and it will tell us ALL of the parent classes
 *
 */

class User{

    //Add the User Class PROPERTIES
    var $is_admin = false;

    var $first_name;
    var $last_name;
    var $username;

    /*Additional Suggestions for later on:
    var $id;
    var $profile_img;
    var $password;
    var $password_confirmed;
    var $email;
    var $contact_number;
    */

    //Add the User Class Methods - this method constructs & returns the users Full Name.
    function full_name(){
        return $this->first_name . ' ' . $this->last_name . '.';
    }

}

//This is a Sub-Class of User and will inherit all other Properties & Methods except it IS AN ADMIN.
class AdminUser extends User {

    var $is_admin = true;

    function full_name(){
        return $this->first_name . ' ' . $this->last_name . '(Admin).';
    }
}

class Customer extends User{

    //Add the (new) Customers Properties
    var $city;
    var $state; //or province
    var $country;

    //Add the (new) Customers Methods
    function address(){
        return '<ul><li>' . $this->city . '</li><li>' . $this->state  .'</li><li>' . $this->country . '</li></ul>';
    }
}

//Create a new Object Instance of the User Class - Instatiate new Object
$u = new User;

//Provide the Properties of this User Class Instance
$u->first_name = 'Jerry';
$u->last_name = 'Seinfeld';
$u->username = 'jseinfeld';


//Call Method that prints out the Full Name for this User Class Instance
$name = $u->full_name();
echo '<strong>Full Name:</strong> ' . $name . '<br />';

//Create a new Object Instance of the Customer Sub-Class - Instatiate new Object
$c = new Customer;

//Provide the Properties of this Customer Sub-Class Instance proving we are inheriting the properties $first_name, $last_name, $username
$c->first_name = 'George';
$c->last_name = 'Costanza';
$c->username = 'gcostanza';
$c->city = 'Statten Island';
$c->state = 'New York';
$c->country = 'United States';

//Call Method that prints out the Full Name for this Customer Sub-Class Instance
$name = $c->full_name();
echo '<strong>Full Name:</strong> ' . $name . '<br />';

$c_address = $c->address();
echo '<strong>Address:</strong>' . $c_address;

/*
$u_address = $u->address();
echo '<strong>Address:</strong>' . $u_address; // Undefined Method ERROR as no Method address exists for $User Class
*/

//Use the get_parent_class() Method to confirm which is the 'Parent Class of the User $u & Customer $c Instances':
echo 'The Parent Class of ' . 'User is: ' . get_parent_class($u) . '<br />';
echo 'The Parent Class of ' . 'Customer is: ' . get_parent_class($c) . '<br />';

//Use the is_subclass_of() Method to display which Classes are Sub-Clases of Clases or Sub-Classes - returns true/false therefore need to use a loop to display results:
if(is_subclass_of($c, 'User')){
    echo 'Customer is a Sub-Class of User. <br /><br />';
} else {
    echo 'Customer is not a Sub-Class of User. <br /><br />';
}

//Use the class_parents() Method to see what Parents a particlar Sub-Class has - even though we wrote the Class Files. This returns an array which we need to deconstruct to echo out...
//This is useful if we don't know how many Classes there are in a project and we want to target the Parent Class rather than the Sub-Classes so we can use the functionality api wide.
$parents = class_parents($c);
echo implode(', ',$parents) . '<br />';
