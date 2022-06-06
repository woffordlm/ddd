<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Marathi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <img id="logo" src= "images/SBC.svg">
        <h3>Vegetable Profiles</h3>
    </header>
    <main id = "main" class ="main">
        <?php foreach ($selectedVeggies as $veg): ?>
            <div name= "<?= $veg->name;?>" class="parent"  >
                <div class="pic-title">
                   <strong> <?= $veg->name;?> </strong>
                </div> 
                <div  class="child">
                    <img data-toggle="modal" data-target="#myModal"  name = "<?=$veg->name;?>" src="images/<?= $veg->name;?>.jpg" alt="<?= $veg->name;?>">
                </div>
            </div>
        <?php endforeach; ?>
    </main>



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">  <?= $veg->name;?></h4>
        </div>
        <div class="modal-body">
          <img  src="images/<?= $veg->name;?>.jpg" alt="<?= $veg->name;?>" style ="width:50%">
          <p><strong>Days to Maturity:<?= $veg->name;?></strong></p>
          <p><strong>Harvest Window:</strong><?= $veg->dtm;?></p>
          <p><strong>Sowing Dates:</strong><?= $veg->sowingDates;?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<script src="/veggie.js"></script>
</body>

</html>