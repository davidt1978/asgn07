<?php
class Cube extends Rectangle
{
  private $z;
  
  public function getz()
  {return $this->z;}
  
  public function setz($z)
  {$this->z = $z;}
  
  public function getArea()
  {
    return $this->x * $this->y * 2 + $this->y * $this->z * 2 + $this->z * $this->x * 2;
  }
  
  public function getVolume()
  {
    return $this->x * $this->y * $this->z;
  }
}