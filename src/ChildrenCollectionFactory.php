<?php declare(strict_types = 1);

namespace PhpstanMockeryFinals;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

final class ChildrenCollectionFactory implements CollectionFactory
{
    /**
     * @return Collection<int, ParentClass>|ParentClass[]
     */
    public function create(): Collection
    {
        $items = [
            new ChildrenClass(),
            new ChildrenClass(),
        ];

        return new ArrayCollection($items);
    }
}
