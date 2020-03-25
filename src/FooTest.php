<?php declare(strict_types = 1);

namespace PhpstanMockeryFinals;

use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class FooTest extends TestCase
{
    /**
     * @var FinalClass&MockInterface
     */
    private $finalClassMock;


    public function setUp(): void
    {
        parent::setUp();
        $this->finalClassMock = Mockery::mock(FinalClass::class);
    }
}
