<?php declare(strict_types = 1);

namespace PhpstanMockeryFinals;

use Nette\Utils\Random;

final class RandomGenerator
{
    public function generate(int $length): string
    {
        return Random::generate($length);
    }
}
