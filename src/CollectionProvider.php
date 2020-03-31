<?php declare(strict_types = 1);

namespace PhpstanMockeryFinals;

use Doctrine\Common\Collections\Collection;

final class CollectionProvider
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;


    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }


    /**
     * @return Collection<int, ParentClass>|ParentClass[]
     */
    public function get(): Collection
    {
        return $this->collectionFactory->create();
    }
}
