<?php

namespace Tests\AppBundle\Factory;

use AppBundle\Entity\Dinosaur;
use AppBundle\Factory\DinosaurFactory;
use AppBundle\Service\DinosaurLengthDeterminator;
use PHPUnit\Framework\TestCase;

class WorkingConstant extends TestCase
{
    /**
     * @var DinosaurFactory
     */
    private $factory;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $lengthDeterminator;

    public function setUp()
    {
        $this->lengthDeterminator = $this->createMock(DinosaurLengthDeterminator::class);
        $this->factory = new DinosaurFactory($this->lengthDeterminator);
    }

    // public function testItGrowsALargeVelociraptor()
    // {
    //     $dinosaur = $this->factory->growVelociraptor(5);

    //     $this->assertInstanceOf(Dinosaur::class, $dinosaur);
    //     $this->assertInternalType('string', $dinosaur->getGenus());
    //     $this->assertSame('Velociraptor', $dinosaur->getGenus());
    //     $this->assertSame(5, $dinosaur->getLength());
    // }

    // public function testItGrowsATriceraptors()
    // {
    //     $this->markTestIncomplete('Waiting for confirmation from GenLab');
    // }

    // public function testItGrowsABabyVelociraptor()
    // {
    //     if (!class_exists('Nanny')) {
    //         $this->markTestSkipped('There is nobody to watch the baby!');
    //     }
    // }

    // /**
    //  * @dataProvider getSpecificationTests
    //  */
    // public function testItGrowsADinosaurFromSpecification(string $specification, bool $expectedIsCarnivorous)
    // {

    //     $dinosaur = $this->factory->growFromSpecification($specification);

    //     $this->assertSame($expectedIsCarnivorous, $dinosaur->isCarnivorous(), 'Diets do not match');
    // }

    /**
     */
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

    public function getSpecificationTests()
    {
        return [
            [
                'large carnivorous dinosaur',
                true,
                Dinosaur::LARGEMIN,
                Dinosaur::LARGEMAX,
            ],
            [
                'small herbivore',
                false,
                Dinosaur::SMALLMIN,
                Dinosaur::SMALLMAX
            ],
        ];
    }
}
