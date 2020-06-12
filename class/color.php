<?php
class Color { 
    protected $color;
    protected $opacity;

    function __construct()
    {
        $this->color="blue";
        $this->opacity=1;
    }

    function getColor()
    {
        return $this->color;
    }

    function getOpacity()
    {
        return $this->opacity;
    }


    public function setAspect(string $color,float $opacity){
        $this->color=$color;
        $this->opacity=$opacity;
    }
}