<?php

namespace AppBundle\Factory;

use AppBundle\Entity\Dinosaur;

class DinosaurFactory
{
    const SMALLMIN = 1;
    const SMALLMAX = 10;
    const LARGEMIN = 20;
    const LARGEMAX = 20;
    const HUGEMIN = 100;
    const HUGEMAX = 100;

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
        $length = $this->getLengthFromSpecification($specification);
        $dinosaur->setLength($length);
        return $dinosaur;
    }

    public function getLengthFromSpecification($specification)
    {
        $availableLengths = [
            'small' => ['min' => self::SMALLMIN, 'max' => self::SMALLMAX],
            'huge' => ['min' => self::HUGEMIN,  'max' =>  self::HUGEMAX],
            'omg' => ['min' => self::HUGEMIN,  'max' =>  self::HUGEMAX],
            '😱' => ['min' => self::HUGEMIN,  'max' =>  self::HUGEMAX],
            'large' => ['min' => self::LARGEMIN,  'max' =>  self::LARGEMAX],
        ];

        $minLength = 1;
        $maxLength = 1;
        foreach (explode(' ', $specification) as $keyword) {
            $keyword = strtolower($keyword);
            if (array_key_exists($keyword, $availableLengths)) {
                $minLength = $availableLengths[$keyword]['min'];
                $maxLength = $availableLengths[$keyword]['max'];

                break;
            }
        }

        return random_int($minLength, $maxLength);
    }
}





/*NEXT     ACTION

DO RESUME, PUT IN FEELERS AT
1) TEAM SOFT
2) SLACK - get slack for madison on this computer





3)
MAKE THE ONES IN THIS SECTION PASS AND
GO TO NEXT CHAPTER

HOPE
VIDEOS GO FASTER NOW


GET THE VELOCITY UP
























*/
