<!DOCTYPE html>
<!--
Author:   David Truesdale
Date:     10/17/2020
File:     fixit3.php
Purpose:  What's wrong here? The code creates an Employee instance. Then sets the ID and prints the ID. But the line that sets the ID isn't working. What's wrong here?
-->
<?php
  include("php/my-functions.php");
?>

<html>
  <head>
    <?= head_info() ?>
    <title>Wage Report</title>
  </head>

  <body>
    <h1>WAGE REPORT</h1>

    <?php
    include("inc-employee-object.php");

    $emp1 = new Employee();

    $emp1->setID("123456");

    print ("<p>The employee's ID is ".$emp1->getID()."</p>");
    ?>
  </body>
  
  <footer>
    <?= back_to_index(); ?>
  </footer>
</html>
