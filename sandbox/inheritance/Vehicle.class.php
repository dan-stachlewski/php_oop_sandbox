<?php

/**
 * Class Vehicle:
 *
 *
 *
 */

class Vehicle{

    //Define Class Attributes
    var $wheels;
    var $doors;

    //Define Class Methods
    function petrol_type(){
        return 'Unleaded';
    }

}

/**
 * These sub-classes have access to the methods & properties of the Class Vehicle
 */

class Car extends Vehicle{

}

class Motorcycle extends Vehicle{

}

/**
 * The sub-class CompactCar has access to the methods & properties of the Class Vehicle & the Class Car (sub-classes w sub-classes)
 */

class CompactCar extends Car{

}
