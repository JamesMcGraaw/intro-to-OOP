<?php

require_once  'Pig.php';
require_once 'Sty.php';

// Create an object of the type Pig
// Instantiate a Pig object
$sally = new Pig();

// $sally is an instance of Pig

//$sally->name = 'Sally'; must use setName if set to private in the class
$sally->setName('Sally');
$sally->weight  = 280.5;
$sally->colour = 'yellow';

echo '<pre>';
print_r($sally);
echo '</pre>';

$fred = new Pig();

// $sally is an instance of Pig

//$fred->name = 'Fred';
$fred->setName('Fred');
$fred->weight  = 300;
$fred->colour = 'black';

echo '<pre>';
print_r($fred);
echo '</pre>';

// -> is called the object operator or object accessor

echo $fred->getName() . ' says ' . $fred->speak() . ' ' . $fred->speak();

echo $fred->eat('truffles');
// These two lines do the same thing
//echo $fred->name;
echo $fred->getName();
// by making it private and only creating a getter and no setter it makes it read only
echo $fred->getScientificName();

echo $fred::OWNER;

// :: is called the class accessor or scope resolution operator

echo '<br>';
echo '<br>';

$sty = new Sty();

$sty-> addPig($sally);
$sty-> addPig($fred);

echo '<pre>';
print_r($sty);
echo '</p>';

echo '<pre>';
print_r($sty-> getPig(1));
echo '</pre>';

$cuthbert = new Pig();
$cuthbert->setName('Cuthbert');
$cuthbert->setWeight(300.5);
$cuthbert->setColour('pink');

$spider = new Pig();
$spider->setName('Spider');
$spider->setWeight(295);
$spider->setColour('black');

$sty->addPigs([$cuthbert, $spider]);

echo '<pre>';
print_r($sty);
echo '</pre>';