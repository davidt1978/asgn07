<!DOCTYPE html>
<!--
Author:   David Truesdale
Date:     10/18/2020
File:     joke.php
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
    <h1>Jokes</h1>
    <?php
    include("inc-joke-object.php");
    
    $jokeID = $_POST["jokeID"];
    $joke = $_POST["joke"];
    $punchLine = $_POST["punchLine"];
	
    $newJoke = new Joke;
        
    $newJoke->setjokeID($jokeID);
    $newJoke->setjoke($joke);
    $newJoke->setpunchLine($punchLine);

    $newJoke->addJoke();
    
	print("<p>Thank you for submitting a joke!</p>");
    ?>
  </body>
  
  <footer>
    <?= back_to_index(); ?>
  </footer>
</html>