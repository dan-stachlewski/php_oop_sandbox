<?php

/**
 * The below code shows inconsistencies & repititions which will show up bugs.
 */

class ProductBrochure{
    var $file_name;

    function download_path(){
        return "/downloads/" . $this->file_name;
    }

}

class WarrantyDocument{
    var $file_name;

    function download_path(){
        return "/downloads/" . $this->file_name;
    }

}

class CleaningInstructions{
    var $filename;
}

/**
 * The correct way is to define a Parent Class & have the sub-classes 'extend' the Parent Class.
 */
class Document{
    var $file_name;

    function download_path(){
        return "/downloads/" . $this->file_name;
    }
}

/**
 * The below classes have access to the download_path() method by extending the Parent Class.
 */

class ProductBrochure extends Document{

}

class WarrantyDocument extends Document{

}

class CleaningInstructions extends Document{

}
