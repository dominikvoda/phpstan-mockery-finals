<?php declare(strict_types = 1);

namespace PhpstanMockeryFinals\Examples;

use PhpstanMockeryFinals\RandomGenerator;

final class MyFooClass
{
    /**
     * @var RandomGenerator
     */
    private $randomGenerator;


    public function __construct(RandomGenerator $randomGenerator)
    {
        $this->randomGenerator = $randomGenerator;
    }


    public function returnRandom(): string
    {
        return $this->randomGenerator->generate(10);
    }
}
