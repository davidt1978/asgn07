<!DOCTYPE html>
<!--
Author:   David Truesdale
Date:     10/18/2020
File:     game-character.php
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
    <h1>Game Characters</h1>
    <?php
    include("inc-game-character-object.php");
    
    $name1 = $_POST["name1"];
    $score1 = $_POST["score1"];
    $name2 = $_POST["name2"];
    $score2 = $_POST["score2"];
	
    $player1 = new GameCharacter;
    $player2 = new GameCharacter;
        
    $player1->setplayerName($name1);
    $player1->setscore($score1);
    $player2->setplayerName($name2);
    $player2->setscore($score2);
		
	print("<p>".$player1->getplayerName()." scored ".$player1->getscore()." points.</p>
    <p>".$player2->getplayerName()." scored ".$player2->getscore()." points.</p>");
    
    if($player1->getscore() > $player2->getscore())
      print("<h2>The winner is ".$player1->getplayerName()."!!!</h2>");
    else
      print("<h2>The winner is ".$player2->getplayerName()."!!!</h2>");
    ?>
  </body>
  
  <footer>
    <?= back_to_index(); ?>
  </footer>
</html>
