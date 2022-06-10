 <?php 

class Details { 
    public $name;
    public $dtm;
    public $harvestwindow;
    public $sowingDates;
    
    
      function __construct($name, $dtm, $harvestwindow, $sowingDates) {
        
          $this->name = $name;
          $this->dtm = $dtm;
          $this->harvestwindow = $harvestwindow;
          $this->sowingDates = $sowingDates;
      }
 }
 
//  $veggieType = new Vegetable ('arugula', '30', '14','2/1-5/1');
//  var_dump($veggieType);