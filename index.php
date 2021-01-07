<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php snack b1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="#">
    <?php

      require_once "data.php";

     ?>
  </head>
  <body>

    <?php

     foreach ($hotels as $key => $value) {
       ?>
       <div class="box">

         <h1><?php echo $value['name'] ?></h1>
         <h2><?php echo $value['description'] ?></h2>

       </div>
       <?php
     }

     ?>
  </body>
</html>
