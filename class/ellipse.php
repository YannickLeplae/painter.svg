<?php
class Ellipse extends Shape{
    protected $rx;
    protected $ry;
    
   

    function __construct(){
        parent::__construct();
        $this->rx = 10;
        $this->ry = 5;
        
        
    }
    public function setSize(int $rx, int $ry)
    {
        $this->rx=$rx;
        $this->ry=$ry;
    } 
    
    
    public function draw()
    {
        $ellipse2= '<ellipse
         cx="'. $this->location->getX().'"
         cy="'.$this->location->getY().'"
         rx = "'.$this->rx.'"
         ry = "'.$this->ry.'"
         fill= "' .$this->aspect->getColor() . '"
         opacity= "' .$this->aspect->getOpacity() .'"/>';
return $ellipse2;
    }

}
