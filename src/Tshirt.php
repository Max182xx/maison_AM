<?php

namespace Mgarc\Vetements;

use Mgarc\Vetements\Clothes;

class Tshirt extends Clothes
{

    public function __construct(

        string $size,
        string $color,
        int $price,
        public bool $gender
    ) {
        $this->size = $size;
        $this->color = $color;
        $this->price = $price;
        $this->gender = $gender;

    }
    public function getType(): string
    {
        return 'T-shirt';
    } 
}