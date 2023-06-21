<?php 
class Animals{
    protected $animalSpecies;
    protected $size;
    protected $age;

    protected function __construct($animalSpecies,$size,$age)
    {
        $this->animalSpecies = $animalSpecies;
        $this->size = $size;
        $this->age =$age;

    }

}
