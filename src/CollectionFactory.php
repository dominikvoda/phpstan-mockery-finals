<?php declare(strict_types = 1);

namespace PhpstanMockeryFinals;

use Doctrine\Common\Collections\Collection;

interface CollectionFactory
{
    /**
     * @return Collection<int, ParentClass>|ParentClass[]
     */
    public function create(): Collection;
}
