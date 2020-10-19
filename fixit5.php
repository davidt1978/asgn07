<!DOCTYPE html>
<!--
Author:   David Truesdale
Date:     10/18/2020
File:     fixit5.php
Purpose:  What's wrong here? The code creates an Employee instance, then sets the employee attributes then prints the ID, name, and weekly pay. But the attributes and pay aren't printing. What's the problem? Hint: are the correct methods always being used here?
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
	$emp1->setFirstName("Alan");
	$emp1->setLastName("Turing");
	$emp1->setHourlyWage(15.25);
	
    print("<table>
			<tr><td>ID</td><td>".$emp1->getID()."</td></tr>
			<tr><td>First Name</td><td>".$emp1->getFirstName()."</td></tr>
			<tr><td>Last Name</td><td>".$emp1->getLastName()."</td></tr>
			<tr><td>Weekly Pay</td><td>".$emp1->getWeeklyPay(40)."</td></tr>
			</table>"
         );
	?>
  </body>
  
  <footer>
    <?= back_to_index(); ?>
  </footer>
</html>
