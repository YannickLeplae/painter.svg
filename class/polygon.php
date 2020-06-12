<?php


class Polygon extends Shape {
    protected $points;
  


    function __construct()
    {
        parent::__construct();
        $this-> points = [];
    }

    function setpoints(array $points){
        $this-> points =$points;
    }



    public function draw()
    {
        return '<polygon points="' .
        implode(' ', $this->points) . '"
        fill="'.$this->aspect->getColor().'" 
        opacity="'.$this->aspect->getOpacity().'
        " />';
    }
}

















