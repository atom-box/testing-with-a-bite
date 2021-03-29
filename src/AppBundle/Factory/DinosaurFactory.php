<?php

namespace AppBundle\Factory;

use AppBundle\Entity\Dinosaur;
use AppBundle\Service\DinosaurLengthDeterminator;

class DinosaurFactory
{

    const LARGE = 20;

    public function __construct()
    {
    }


    public function growVelociraptor(int $length): Dinosaur
    {
        $dinosaur = new Dinosaur('Velociraptor', true);
        $dinosaur->setLength($length);
        return $dinosaur;
    }

    public function growFromSpecification(string $type)
    {
        $carnivorousness = (strpos($type, 'carnivorous')) ? true : false;
        $dinosaur = new Dinosaur($type, $carnivorousness);
        if (strpos($type, 'large') !== false) {
            $length = random_int(20, 100);
        } else {
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
