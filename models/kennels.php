<?php 
class Kennels{
    protected $name;
    protected $type;
    protected $price;
    protected $dimensions;

    function __construct($name, $type, $price,$dimensions)
    {
        $this->name=$name;
        $this->type=$type;
        $this->price=$price;
        $this->dimensions=$dimensions;
    }
}
