<?php declare(strict_types = 1);

namespace PhpstanMockeryFinals\Unresolvable;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Required;

final class FooRuleProvider
{
    /**
     * @return Constraint[]
     */
    public function getRules(): array
    {
        return [
            new Required(),
            new Email(),
        ];
    }
}
