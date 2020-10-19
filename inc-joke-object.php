<?php
class Joke
{
  private $jokeID;
  private $joke;
  private $punchLine;
  
  public function addJoke()
  {
    $jokeRecord = $this->jokeID."/ ".$this->joke."/ ".$this->punchLine."\n";
    $jokeFile = fopen("jokes.txt", "a");
    fputs($jokeFile, $jokeRecord);
    fclose($jokeFile);
  }
  
  public function findJoke($id)
  {
    $jokeFile = fopen("jokes.txt", "r");
    $jokeRecord = fgets($jokeFile);
    $notFound = true;
    while (!feof($jokeFile) and $notFound)
    {
      list ($jokeID, $joke, $punchLine) = explode("/", $jokeRecord);
      if ($id == $jokeID)
      {
        $this->jokeID = $jokeID;
        $this->joke = $joke;
        $this->punchLine = $punchLine;
        $notFound = false;
      }
      $jokeRecord = fgets($jokeFile);
    }
    fclose($jokeFile);
    
    if ($notFound == true)
      return 0;
    else
      return 1;
  }
  
  public function getjokeID()
  {return $this->jokeID;}
  
  public function setjokeID($jokeID)
  {$this->jokeID = $jokeID;}
  
  public function getjoke()
  {return $this->joke;}
  
  public function setjoke($joke)
  {$this->joke = $joke;}
  
  public function getpunchLine()
  {return $this->punchLine;}
  
  public function setpunchLine($punchLine)
  {$this->punchLine = $punchLine;}
}
?>
