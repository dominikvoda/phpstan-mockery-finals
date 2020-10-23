<?php declare(strict_types = 1);

namespace PhpstanMockeryFinals\Examples;

use Mockery;
use Mockery\MockInterface;
use PhpstanMockeryFinals\RandomGenerator;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class MyFooClassTest extends TestCase
{
    public function testReturnRandom(): void
    {
        $return = 'qwertz';
        $foo = new MyFooClass($this->createRandomGeneratorMock($return));

        Assert::assertSame($return, $foo->returnRandom());
    }


    /**
     * @return RandomGenerator&MockInterface
     */
    private function createRandomGeneratorMock(string $return): RandomGenerator
    {
        $uuidFactoryMock = Mockery::mock(RandomGenerator::class);
        $uuidFactoryMock->shouldReceive('generate')
            ->with(10)
            ->andReturn($return);

        return $uuidFactoryMock;
    }
}
