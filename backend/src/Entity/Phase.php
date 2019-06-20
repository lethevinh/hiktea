<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use App\Entity\Traits\BlameableTrait;
use App\Entity\Traits\TimestampableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(attributes={
 *     "normalization_context"={"groups"={"read"}},
 *     "denormalization_context"={"groups"={"write"}}
 * })
 * @ApiFilter(OrderFilter::class, properties={"id"}, arguments={"orderParameterName"="order"})
 * @ORM\Entity(repositoryClass="App\Repository\PhaseRepository")
 */
class Phase
{
    use BlameableTrait;
    use TimestampableTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\OrderItem", inversedBy="yes")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $orderItem;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Assignment", mappedBy="phase", orphanRemoval=true)
     */
    private $assignments;

    public function __construct()
    {
        $this->assignments = new ArrayCollection();
    }

    public function getId():  ? int
    {
        return $this->id;
    }

    public function getOrderItem() :  ? OrderItem
    {
        return $this->orderItem;
    }

    public function setOrderItem( ? OrderItem $orderItem) : self
    {
        $this->orderItem = $orderItem;

        return $this;
    }

    /**
     * @return Collection|Assignment[]
     */
    public function getAssignments() : Collection
    {
        return $this->assignments;
    }

    public function addAssignment(Assignment $assignment): self
    {
        if (!$this->assignments->contains($assignment)) {
            $this->assignments[] = $assignment;
            $assignment->setPhase($this);
        }

        return $this;
    }

    public function removeAssignment(Assignment $assignment): self
    {
        if ($this->assignments->contains($assignment)) {
            $this->assignments->removeElement($assignment);
            // set the owning side to null (unless already changed)
            if ($assignment->getPhase() === $this) {
                $assignment->setPhase(null);
            }
        }

        return $this;
    }
}
