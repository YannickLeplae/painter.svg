<?php
abstract class Shape{
    protected $location;
    protected $aspect;

    function __construct()
    {
        $this->location = New Point();
        $this->aspect = New Color();
    }

    public function setLocation(int $x, int $y)
    {
        $this->location->moveTo ($x,$y);  // objet courant prop location contient objet class point moveto
    } 

    public function setColor(string $color,float $opacity)
    {
        $this->aspect->setAspect ($color,$opacity);
    }

    abstract public function draw();

}