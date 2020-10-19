<!DOCTYPE html>
<!--
Author:   David Truesdale
Date:     10/17/2020
File:     fixit4.php
Purpose:  What's wrong here? The code creates an Employee instance, then sets all the employee attributes and prints the weekly pay. But the weekly pay isn't right, it should be $610.00 What's the problem? Hint: the weekly pay is based on the hourly wage..
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
	$emp1->setHourlyWage(15.25);
    
	print ("<p>The weekly pay for employee #".$emp1->getID()." is $".$emp1->getWeeklyPay(40)."</p>");
	?>
  </body>
  
  <footer>
    <?= back_to_index(); ?>
  </footer>
</html>
