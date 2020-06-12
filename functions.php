<?php 

function genRectangle(int $x, int $y, int $width, int $height, string $strokecolor, string $fillcolor )
{
    return '<rect x="'.$x .'" y="'.$y.'" width = "'.$width .'" height= "' .$height.'" stroke= "' .$strokecolor .'" fill= "' .$fillcolor .'"/>';
}


function genCircle(int $cx, int $cy, int $r,  string $strokecolor, string $fillcolor )
{
    return '<circle cx="'.$cx .'" cy="'.$cy.'" r= "'.$r .'" stroke= "' .$strokecolor .'" fill= "' .$fillcolor .'"/>';
}


function genSquare(int $x, int $y, int $carre, string $strokecolor, string $fillcolor )
{
    return '<rect x="'.$x .'" y="'.$y.'" width = "'.$carre .'" height= "' .$carre.'" stroke= "' .$strokecolor .'" fill= "' .$fillcolor .'"/>';
}

function genEllipse(int $cx, int $cy, int $rx, int $ry, string $strokecolor, string $fillcolor )
{
    return '<ellipse cx="'.$cx .'" cy="'.$cy.'" rx= "'.$rx .'"ry="' .$ry.'" stroke= "' .$strokecolor .'" fill= "' .$fillcolor .'"/>';
}


function genTriangle( int $x1, int $y1, int $x2, int $y2, int $x3, int $y3, string $strokecolor, string $fillcolor  )
{
    return '<polygon points="'.$x1. ' '.$y1 .' ' .$x2 .' ' .$y2 .' ' .$x3 .' ' .$y3 .'" stroke= "' .$strokecolor .'" fill= "' .$fillcolor .'" />';
}


//function genTriangle (array $points, string $strokecolor, string $fillcolor)
//{
 //   return '<polygon points="' .implode(' ', $points) ."
//}














?>

