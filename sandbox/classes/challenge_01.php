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
        return $convert_to_kg;
    }

}

//{$byc1->img_url}

$byc1 = new Bicycle;
$byc1->brand = 'Giant Manufacturing Co. Ltd.';
$byc1->model = 'TCX Cyclocros';
$byc1->year = 2017;
$byc1->img_url = './assets/denali-rb.jpg';
$byc1->description = "<img  style='float:left;width:170px;height:170px;margin-right:15px;' src='{$byc1->img_url}' alt='' /> Giant Manufacturing Co. Ltd. is a Taiwanese bicycle manufacturer that is the world’s largest bicycle manufacturer. Giant was started started by King Liu in 1972. Giant has manufacturing facilities in Taiwan, the Netherlands, and China.By 2014, Giant had sales in over 50 countries, in over 12,000 retail stores. In 2007, its global sales surpassed 5 million bicycles and US$820 million in global revenue, and by 2012 it had reached 6.3 million bicycles and revenue of US$1.8 billion.";
$byc1->weight_kg = 6.75;
$byc1->weight_lbs = 14.8812;

echo $byc1->name() . '<br />';
echo $byc1->description;
echo round($byc1->weight_lbs(),2) . '<br />';
echo round($byc1->set_weight_lbs($byc1->weight_lbs),2) . '<br />';
