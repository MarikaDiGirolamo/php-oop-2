<?php
class Product
{
    // immagine, titolo, prezzo, icona della categoria
    protected $image;
    protected $icon;
    protected $name;
    protected $price;


    function __construct($image, $icon, $name, $price)
    {
        $this->image = $image;
        $this->icon = $icon;
        $this->name = $name;
        $this->price = $price;
    }
}
