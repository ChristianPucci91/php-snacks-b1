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

         <h1><?php echo $value['name']; ?></h1>
         <h3><?php echo $value['description']; ?></h3>

         <ul>
           <!-- se parking = true scrive si altrimenti no -->
           <li>
             <strong>Parking:</strong>
             <?php
               if ($value['parking']) {
                 echo 'Si';
               }else {
                 echo 'No';
               }
             ?>
           </li>

            <li>
              <strong>Voto: </strong>
              <?php
               echo $value['vote'];
              ?>
            </li>

            <li>
              <strong>Distanza dal centro: </strong>
               <?php
                 echo $value['distance_to_center'];
               ?>
               km
            </li>

         </ul>

       </div>
       <?php
     }

     ?>
  </body>
</html>
