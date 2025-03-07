<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\ValueConversionType;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="vct_inversed_manytomany")
 */
class InversedManyToManyEntity
{
    /**
     * @var string
     * @Column(type="rot13", length=255)
     * @Id
     */
    public $id1;

    /**
     * @phpstan-var Collection<int, OwningManyToManyEntity>
     * @ManyToMany(targetEntity="OwningManyToManyEntity", mappedBy="associatedEntities")
     */
    public $associatedEntities;

    public function __construct()
    {
        $this->associatedEntities = new ArrayCollection();
    }
}
