<?php
// PHP Fatal error:  Uncaught Error:
// Class 'AppBundle\Entity\Dinosaur' not found in
// /home/evan/projects/testing-with-a-bite/src/AppBundle/Factory/NotWorkingConstant.php:49

namespace AppBundle\Factory;

use AppBundle\Entity\Dinosaur;

class NotWorkingConstant
{
    // const SMALLMIN = 1;
    // const SMALLMAX = 10;
    // const LARGEMIN = 20;
    // const LARGEMAX = 20;
    // const HUGEMIN = 100;
    // const HUGEMAX = 100;

    // public function __construct()
    // {
    // }

    // public function growVelociraptor(int $length): Dinosaur
    // {
    //     $dinosaur = new Dinosaur('Velociraptor', true);
    //     $dinosaur->setLength($length);
    //     return $dinosaur;
    // }

    // public function growFromSpecification(string $specification)
    // {
    //     $carnivorousness = (strpos($specification, 'carnivorous')) ? true : false;
    //     $dinosaur = new Dinosaur($specification, $carnivorousness);
    //     $length = $this->getLengthFromSpecification($specification);
    //     $dinosaur->setLength($length);
    //     return $dinosaur;
    // }

    // public function getLengthFromSpecification($specification)
    // {
    //     $availableLengths = [
    //         'small' => ['min' => self::SMALLMIN, 'max' => self::SMALLMAX],
    //         'huge' => ['min' => self::HUGEMIN,  'max' =>  self::HUGEMAX],
    //         'omg' => ['min' => self::HUGEMIN,  'max' =>  self::HUGEMAX],
    //         '😱' => ['min' => self::HUGEMIN,  'max' =>  self::HUGEMAX],
    //         'large' => ['min' => self::LARGEMIN,  'max' =>  self::LARGEMAX],
    //     ];
    public function testConstantIsPresent()
    {
        // $dinosaur = $this->factory->growFromSpecification($specification);
        echo "\n";
        echo (Dinosaur::HUGEMIN);
        echo (" is a dino size   :::::::::::::::::\n");
        echo (Dinosaur::SMALLMAX);
        echo (" is a dino size   :::::::::::::::::\n");
        echo (Dinosaur::LARGEMIN);
        echo (" is a dino size   :::::::::::::::::\n");
    }


    //     $minLength = 1;
    //     $maxLength = 1;
    //     foreach (explode(' ', $specification) as $keyword) {
    //         $keyword = strtolower($keyword);
    //         if (array_key_exists($keyword, $availableLengths)) {
    //             $minLength = $availableLengths[$keyword]['min'];
    //             $maxLength = $availableLengths[$keyword]['max'];

    //             break;
    //         }
    //     }

    //     return random_int($minLength, $maxLength);
    // }
}
$sam = new NotWorkingConstant();
$sam->testConstantIsPresent();
