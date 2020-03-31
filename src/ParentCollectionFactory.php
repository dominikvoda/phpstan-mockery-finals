<?php declare(strict_types = 1);

namespace PhpstanMockeryFinals;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class ParentCollectionFactory implements CollectionFactory
{
    /**
     * @return Collection<int, ParentClass>|ParentClass[]
     */
    public function create(): Collection
    {
        $items = [
            new ParentClass(),
            new ParentClass(),
        ];

        return new ArrayCollection($items);
    }
}
