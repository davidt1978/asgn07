<!DOCTYPE html>
<!--
Author:   David Truesdale 
Date:     10/18/2020
File:     software-order.php
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
    <h1>Software Order</h1>
    <?php
    include("inc-order-object.php");
    
    $cost = $_POST["cost"];
    $items = $_POST["items"];
    
    $order = new Order;
    
    $order->setItemCost($cost);
    $order->setnumItems($items);
    
    $subTotal = $order->getSubTotal();
    $tax = $order->getSalesTax();
    $shippingHandling = $order->getShippingHandling();
    $total = $order->getTotal();	

	print("	<table>
			<tr><td>Sub-Total:</td><td>$subTotal</td></tr>
			<tr><td>Tax:</td><td>$tax</td></tr>
			<tr><td>Shipping and Handling:</td><td>$shippingHandling</td></tr>
			<tr><td>TOTAL:</td><td>$total</td></tr>
			</table>");
    ?>
  </body>
  
  <footer>
    <?= back_to_index(); ?>
  </footer>
</html>