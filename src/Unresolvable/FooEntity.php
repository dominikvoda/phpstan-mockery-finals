<?php declare(strict_types = 1);

namespace PhpstanMockeryFinals\Unresolvable;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;

/**
 * @Entity()
 */
final class FooEntity
{
    /**
     * @Id
     * @Column(type="string")
     *
     * @var string
     */
    private $id;


    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}
