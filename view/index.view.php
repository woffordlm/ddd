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
   <?php require ('partials/nav.php');?>
    <h3>Vegetable Profiles</h3>
    <main id = "main" class ="main">
        <?php foreach ($selectedVeggies as $veg): ?>
          <form action="details" method="POST">
            <input value="<?= $veg->name;?>" style = "display:none" name="name">
            <button type="submit"  class="parent"  >
                <div class="pic-title">
                   <strong> <?= $veg->name;?> </strong>      
                </div> 
                <div  class="child">
                    <img name = "<?=$veg->name;?>" src="images/<?= $veg->name;?>.jpg" alt="<?= $veg->name;?>">
                </div>
          </button>
            </form>  
           
        <?php endforeach; ?>
    </main>

  


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<script src="/veggie.js"></script>
</body>

</html>