<?php

namespace AppBundle\Factory;

use AppBundle\Entity\Dinosaur;
use AppBundle\Service\DinosaurLengthDeterminator;

class DinosaurFactory
{
    public function __construct()
    {
    }


    public function growVelociraptor(int $length): Dinosaur
    {
        $dinosaur = new Dinosaur();
        $dinosaur->setLength($length);
        return $dinosaur;
    }
}
