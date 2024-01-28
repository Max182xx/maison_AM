<?php 

namespace Mgarc\Vetements;

abstract class Clothes

{

      public string $size;
      public string $color;
      public  int $price;
      public bool $gender;
    public function isForMan()
    {
      $this->gender === true;
    }

    public function isForWoman()
    {
      $this->gender === false;
    }

    public function getType()
    {

    } 
  
    public function addClothes()
    {

    }
}