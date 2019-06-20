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
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(attributes={
 *     "normalization_context"={"groups"={"read"}},
 *     "denormalization_context"={"groups"={"write"}}
 * })
 * @ApiFilter(OrderFilter::class, properties={"id"}, arguments={"orderParameterName"="order"})
 * @ORM\Entity(repositoryClass="App\Repository\UnitRepository")
 * @UniqueEntity("name")
 */
class Unit
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
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     */
    private $name;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\Farm", inversedBy="units")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $farm;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="units")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Greenhouse", mappedBy="unit", orphanRemoval=true)
     */
    private $greenhouses;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Assignment", mappedBy="unit", orphanRemoval=true)
     */
    private $assignments;

    public function __construct()
    {
        $this->greenhouses = new ArrayCollection();
        $this->assignments = new ArrayCollection();
    }

    public function getId():  ? int
    {
        return $this->id;
    }

    public function getName() :  ? string
    {
        return $this->name;
    }

    public function setName(string $name) : self
    {
        $this->name = $name;

        return $this;
    }

    public function getFarm():  ? Farm
    {
        return $this->farm;
    }

    public function setFarm( ? Farm $farm) : self
    {
        $this->farm = $farm;

        return $this;
    }

    public function getUser() :  ? User
    {
        return $this->user;
    }

    public function setUser( ? User $user) : self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Greenhouse[]
     */
    public function getGreenhouses() : Collection
    {
        return $this->greenhouses;
    }

    public function addGreenhouse(Greenhouse $greenhouse): self
    {
        if (!$this->greenhouses->contains($greenhouse)) {
            $this->greenhouses[] = $greenhouse;
            $greenhouse->setUnit($this);
        }

        return $this;
    }

    public function removeGreenhouse(Greenhouse $greenhouse): self
    {
        if ($this->greenhouses->contains($greenhouse)) {
            $this->greenhouses->removeElement($greenhouse);
            // set the owning side to null (unless already changed)
            if ($greenhouse->getUnit() === $this) {
                $greenhouse->setUnit(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Assignment[]
     */
    public function getAssignments(): Collection
    {
        return $this->assignments;
    }

    public function addAssignment(Assignment $assignment): self
    {
        if (!$this->assignments->contains($assignment)) {
            $this->assignments[] = $assignment;
            $assignment->setUnit($this);
        }

        return $this;
    }

    public function removeAssignment(Assignment $assignment): self
    {
        if ($this->assignments->contains($assignment)) {
            $this->assignments->removeElement($assignment);
            // set the owning side to null (unless already changed)
            if ($assignment->getUnit() === $this) {
                $assignment->setUnit(null);
            }
        }

        return $this;
    }
}
