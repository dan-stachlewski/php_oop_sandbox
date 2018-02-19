<?php

//Define a Class for a Bicycle.

/*  Define the Properties for the Class:
    var brand;
    var model;
    var year;
    var description;
    var weight_kg;
*/

/**
 * Define the Methods for the Class:
 * name(): brand, model, year in order of my choosing
 * weight_lbs(): convert from kg's to lb's where 1kg = 2.2046226218 lbs
 * set_weight_lbs(): A way to pass in a weight in lbs & have it converted into kg's & store in $weight_kg
 *
 * Instantiate a number of different Bicycle Objects
 * Set & Read Properties
 * Call all Methods to confirm the work
 */

class Bicycle {

    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;
    var $img_url;
    // var $weight_lbs;
    var $lb_in_kgs = 0.45359237;
    var $kg_in_lbs = 2.2046226218;

    function name(){
        return $this->model . ' ' . $this->brand . ' ' . $this->year . '.<br />';
    }

    function weight_lbs(){
        $bicycle_in_lbs = ($this->weight_kg/$this->lb_in_kgs);
        return $bicycle_in_lbs;
    }

    // function set_weight_lbs($weight_lbs){
    //     $convert_to_kg = ($this->weight_lbs*$this->lb_in_kgs);
    //     return $convert_to_kg;
    // }

    function set_weight_lbs($arg){
        $convert_to_kg = ($arg*$this->lb_in_kgs);
        return  $convert_to_kg;
    }

    function description(){
        $desc = '<article>';
        $desc  .= '<img class="img-desc" src="' . $this->img_url . '" width="200" height="200" />';
        $desc .= '<p>' . $this->description . '</p>';
        $desc .='</article>';
        return $desc;
    }

}

//{$byc1->img_url}
