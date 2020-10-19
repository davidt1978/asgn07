<!DOCTYPE html>
<!--
Author:   David Truesdale
Date:     10/18/2020
File:     paint-estimate.php
Purpose:  OOP Exercise
-->
<?php
  include("php/my-functions.php");
?>

<html>
  <head>
    <?= head_info() ?>
    <title>OOP Exercise</title>
  </head>

  <body>
    <h1>Paint Estimate</h1>
    <?php
    include("inc-rectangle-object.php");
    
	$height = $_POST["height"];
	$length = $_POST["length"];
	$width = $_POST["width"];
	
    $longWall = new Rectangle;
    $shortWall = new Rectangle;
    
    $longWall->setX($height);
    $longWall->setY($length);
    $shortWall->setX($height);
    $shortWall->setY($width);
        
    $totalArea = $longWall->getArea() * 2 + $shortWall->getArea() * 2;
		
	print("The total area is $totalArea square feet.");
    ?>
  </body>
  
  <footer>
    <?= back_to_index(); ?>
  </footer>
</html>
