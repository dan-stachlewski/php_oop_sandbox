<?php

/**
 * Class Vehicle:
 *
 *
 *
 */

class Vehicle{

    //Define Class Attributes
    var $colours; // added in extend & override classes, sub-classes

    var $wheels;
    var $doors;

    //Define Class Methods
    function upload_img($file){

    } // added in extend & override classes, sub-classes

    function is_good_in_rain(){
        return true;
    } // added in extend & override classes, sub-classes

    function petrol_type(){
        return 'Unleaded';
    }

}

/**
 * These sub-classes have access to the methods & properties of the Class Vehicle
 */

class Car extends Vehicle{

    //Define Class Attributes
    var $wheels = 4;  // added in extend & override classes, sub-classes
    var $doors = 4;  // added in extend & override classes, sub-classes
    var $convertable = false;  // added in extend & override classes, sub-classes

    //Define Class Methods
    function is_good_in_rain(){
        return !$this->convertable = false;
    }  // added in extend & override classes, sub-classes

}

class Motorcycle extends Vehicle{

    //Define Class Attributes
    var $wheels = 2;  // added in extend & override classes, sub-classes
    var $doors = 0;  // added in extend & override classes, sub-classes

    //Define Class Methods
    function is_good_in_rain(){
        return false;
    }  // added in extend & override classes, sub-classes


}

/**
 * The sub-class CompactCar has access to the methods & properties of the Class Vehicle & the Class Car (sub-classes w sub-classes)
 */

class CompactCar extends Car{

}
