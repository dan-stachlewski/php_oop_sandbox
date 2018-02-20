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

    //Add the User Class Methods
    

}

class SubClass extends Parent{

}
