<?php declare(strict_types = 1);

namespace PhpstanMockeryFinals\Unresolvable;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
final class FooEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
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
