<?php 

use Mgarc\Vetements\Tshirt;
use Mgarc\Vetements\Sweat;
use Mgarc\Vetements\Dress;
use Mgarc\Vetements\Pant;




require_once 'vendor/autoload.php';

$tShirt = new TShirt(
    
    size: 'M',
    color: 'red',
    price: 29,
    gender: true

);

$sweat = new Sweat(
   
    size: 40,
    color: 'grey',
    price: 49,
    gender: false
);

$pant = new Pant(
    
    size: 'M',
    color: 'bleu',
    price: 49,
    gender: true
);

$dress = new Dress(
    
    size: 'M',
    color: 'pink',
    price: 79,
    gender: false
);

echo "toto";