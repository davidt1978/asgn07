<?php
class GameCharacter
{
  private $playerName;
  private $score;

  public function getplayerName()
  {return $this->playerName;}

  public function setplayerName($playerName)	
  {$this->playerName = $playerName;}

  public function getscore()
  {return $this->score;}

  public function setscore($score)
  {$this->score = $score;}
  
} // end of class definition
?>
