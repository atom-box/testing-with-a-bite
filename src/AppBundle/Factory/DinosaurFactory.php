<?php

namespace AppBundle\Factory;

use AppBundle\Entity\Dinosaur;
use AppBundle\Service\DinosaurLengthDeterminator;

class DinosaurFactory
{

    const LARGE = 20;
    const HUGE = 30;

    public function __construct()
    {
    }


    public function growVelociraptor(int $length): Dinosaur
    {
        $dinosaur = new Dinosaur('Velociraptor', true);
        $dinosaur->setLength($length);
        return $dinosaur;
    }

    public function growFromSpecification(string $specification)
    {
        $carnivorousness = (strpos($specification, 'carnivorous')) ? true : false;
        $dinosaur = new Dinosaur($specification, $carnivorousness);
        if (strpos($specification, 'large') !== false) {
            $length = random_int(20, HUGE - 1);
        }
        if (stripos($specification, 'huge') !== false) {
            $length = random_int(Dinosaur::HUGE, 100);
        }
        if (strpos($specification, 'small') !== false) {
            $length = random_int(5, 10);
        }
        $dinosaur->setLength($length);
        return $dinosaur;
    }

    public function getLengthFromSpecification($spec)
    {
        $availableLengths = [
            'huge' => ['min' => Dinosaur::HUGE, 'max' => 100],
            'omg' => ['min' => Dinosaur::HUGE, 'max' => 100],
            '😱' => ['min' => Dinosaur::HUGE, 'max' => 100],
            'large' => ['min' => Dinosaur::HUGE, 'max' => 100],
        ];
    }
}
