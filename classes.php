<?php

class Vegetable {
    // protection makes this unaccessible tot he public
    // protected $desciption
   
   public $name;
   public $dtm;
   public $harvestwindow;
   public $sowingDates;
   
    function __construct($name, $dtm, $harvestwindow, $sowingDates) {
        // Automatically triggered on instantiation
        $this->name = $name;
        $this->dtm = $dtm;
        $this->harvestwindtow = $harvestwindow;
        $this->sowingDates = $sowingDates;
    }
}

$veggieType = new Vegetable ('arugula', '30', '14','2/1-5/1');
var_dump($veggieType);