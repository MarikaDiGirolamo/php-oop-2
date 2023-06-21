<?php 
class Food{
    protected $name;
    protected $type;
    protected $price;


    function __construct($name, $type, $price)
    {
        $this->name=$name;
        $this->type=$type;
        $this->price=$price;
    }
}
