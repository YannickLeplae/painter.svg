<?php

//////////////////////////////
// Inclusion des dépendances /
//////////////////////////////

    

require 'autoload.php';
include "functions.php";




///////////////////////
// Traitement PHP ici /
///////////////////////
$svg = "";
$rect = genRectangle (50,200,100,50,"red", "blue");

$ellipse = genEllipse ( 150, 25, 50, 20, "yellow", "yellow");
$svg .= $ellipse;
$svg .= $rect;


$circle = genCircle (75,95,50, "blue", "blue");

$svg .= $circle;

$square = genSquare (200, 300, 50, "yellow","yellow");

$svg .= $square;

$triangle = genTriangle (50, 160, 55, 180, 70, 180, "red", "red");

$svg .= $triangle;

$rect2 = new Rectangle();
$rect2 ->setLocation(400,490);
$rect2 ->setSize(100,60);
$rect2 ->setColor("orange", 1);

$svg .= $rect2 -> draw();


$ellipse2 = new Ellipse();
$ellipse2  ->setLocation(350,600);
$ellipse2  ->setSize(100,60);
$ellipse2  ->setColor("orange", 1);

$svg .= $ellipse2  -> draw();

$circle2 = new Circle();
$circle2  ->setLocation(550, 400);
$circle2  ->setSize(100);
$circle2  ->setColor("orange", 1);

$svg .= $circle2  -> draw();

$square2 = new Square();
$square2 ->setLocation(550,210);
$square2 ->setSize(100,100);
$square2 ->setColor("orange", 1);

$svg .= $square2 -> draw();

$triangle2 = new Triangle();
$triangle2 ->setCoordinates(550, 400, 300, 260, 230, 205);
$triangle2 ->setColor("orange", 1);

$svg .= $triangle2 -> draw();

$poly = new Polygon();
$poly -> setPoints([10,100,28,40,58,36,21, 78]);
$poly ->setColor("orange", 1);

$svg .= $poly -> draw();

//////////////////////////////////////
// Affichage : inclusion du template /
//////////////////////////////////////
include 'index.phtml';