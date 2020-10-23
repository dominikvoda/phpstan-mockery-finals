<?php declare(strict_types = 1);

namespace PhpstanMockeryFinals\Unresolvable;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints;

final class FooRuleProvider
{
    /**
     * @return Constraint[]
     */
    public function getRules(): array
    {
        return [
            new Constraints\Required(),
            new Constraints\Email(),
        ];
    }
}
