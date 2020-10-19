<!DOCTYPE html>
<!--
Author:   David Truesdale
Date:     10/18/2020
File:     joke-tell.php
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
    <h1>Joke</h1>
    <?php
    include("inc-joke-object.php");
	
    $jokeID = $_POST["jokeID"];
    
    $oldJoke = new Joke;
    
    $result = $oldJoke->findJoke($jokeID);
    
    if ($result == 1)
    {
      print("<p>This jokes title is ".$oldJoke->getjokeID().".</p>
      <p>".$oldJoke->getjoke()."</p>
      <p>".$oldJoke->getpunchLine()."</p>");
    }
    else
      print("<p>Your Joke could not be found. Sorry.");
    ?>
  </body>
  
  <footer>
    <?= back_to_index(); ?>
  </footer>
</html>