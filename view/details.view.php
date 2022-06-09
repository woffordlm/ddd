<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="/"> 
            <img id="logo" src= "images/SBC.svg">
        </a> 
    </header>
    <!-- <div id="card">
        <h4> <?=$veggies->name;?></h4>
        <img id=card-image name = "<?=$veggies->name;?>" src="images/<?= $veggies->name;?>.jpg" alt="<?= $veggies->name;?>">
        <div id = "text-container">
            <h5><strong>Days to Maturity:</strong> <?=$veggies->dtm;?></h5>
            <h5><strong>Harvest Window:</strong> <?=$veggies->harvestwindow;?></h5>
            <h5><strong>Sowing Dates:</strong> <?=$veggies->sowingDates;?></h5> 
        </div>
    </div> -->
    <div class="card text-center">
  
  <div class="card-body">
    <img id=card-image name = "<?=$veggies->name;?>" src="images/<?= $veggies->name;?>.jpg" alt="<?= $veggies->name;?>">
    <h5 class="card-title"><?=$veggies->name;?></h5>   
    <h3 class="card-text">Days to Maturity: <?=$veggies->dtm;?> days</h3>
    <h3 class="card-text">Harvest Window: <?=$veggies->harvestwindow;?> days</h3>
    <h3 class="card-text">Sowing Dates:<?=$veggies->sowingDates;?></h3> 
  </div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

     
</body>
</html>