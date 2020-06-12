<?php
class Rectangle extends Shape{
    protected $width;
    protected $height;
   

    function __construct(){
        parent::__construct();
        $this->width = 10;
        $this->height = 5;
       
    }
    public function setSize(int $width, int $height)
    {
        $this->width=$width;
        $this->height=$height;
    } 
    

    public function draw()
    {
        $rect= '<rect 
        x="'. $this->location->getX() .'" 
        y="'.$this->location-> getY().'" 
        width = "'.$this->width.'" 
        height= "' .$this->height.'" 
        fill= "' .$this->aspect->getColor() . '"
        opacity= "' .$this->aspect->getOpacity() .'"/>';
        return $rect;
    }

}
