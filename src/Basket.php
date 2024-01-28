<?php 

namespace Mgarc\Vetements;

class Basket
{
    public array $basket = [];

    public function addClothe(Clothes $clothes): string
    {
        $this->basket [] = $clothes;
        return "Le vétement" .$clothes->getType(). "à bien été ajouté";
    }

    public function deleteClothe(Clothes $clothes): string
    {
        $index = array_search($clothes, $this->$clothes);
        unset($this->basket[$index]);
        return "Le vétement" .$clothes->getType(). "à bien été supprimé";
    }

}

var_dump($basket);
echo 'tot';