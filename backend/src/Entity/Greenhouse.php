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
 * @ORM\Entity(repositoryClass="App\Repository\GreenhouseRepository")
 * @UniqueEntity("code")
 */
class Greenhouse
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
    private $code;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="float")
     * @Assert\NotNull
     */
    private $acreage;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\Unit", inversedBy="greenhouses")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $unit;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Harvest", mappedBy="greenhouse", orphanRemoval=true)
     */
    private $harvests;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pollinate", mappedBy="greenhouse", orphanRemoval=true)
     */
    private $pollinates;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Transplant", mappedBy="greenhouse", orphanRemoval=true)
     */
    private $transplants;

    public function __construct()
    {
        $this->harvests = new ArrayCollection();
        $this->pollinates = new ArrayCollection();
        $this->transplants = new ArrayCollection();
    }

    public function getId():  ? int
    {
        return $this->id;
    }

    public function getCode() :  ? string
    {
        return $this->code;
    }

    public function setCode(string $code) : self
    {
        $this->code = $code;

        return $this;
    }

    public function getAcreage():  ? float
    {
        return $this->acreage;
    }

    public function setAcreage(float $acreage) : self
    {
        $this->acreage = $acreage;

        return $this;
    }

    public function getUnit():  ? Unit
    {
        return $this->unit;
    }

    public function setUnit( ? Unit $unit) : self
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * @return Collection|Harvest[]
     */
    public function getHarvests() : Collection
    {
        return $this->harvests;
    }

    public function addHarvest(Harvest $harvest): self
    {
        if (!$this->harvests->contains($harvest)) {
            $this->harvests[] = $harvest;
            $harvest->setGreenhouse($this);
        }

        return $this;
    }

    public function removeHarvest(Harvest $harvest): self
    {
        if ($this->harvests->contains($harvest)) {
            $this->harvests->removeElement($harvest);
            // set the owning side to null (unless already changed)
            if ($harvest->getGreenhouse() === $this) {
                $harvest->setGreenhouse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Pollinate[]
     */
    public function getPollinates(): Collection
    {
        return $this->pollinates;
    }

    public function addPollinate(Pollinate $pollinate): self
    {
        if (!$this->pollinates->contains($pollinate)) {
            $this->pollinates[] = $pollinate;
            $pollinate->setGreenhouse($this);
        }

        return $this;
    }

    public function removePollinate(Pollinate $pollinate): self
    {
        if ($this->pollinates->contains($pollinate)) {
            $this->pollinates->removeElement($pollinate);
            // set the owning side to null (unless already changed)
            if ($pollinate->getGreenhouse() === $this) {
                $pollinate->setGreenhouse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Transplant[]
     */
    public function getTransplants(): Collection
    {
        return $this->transplants;
    }

    public function addTransplant(Transplant $transplant): self
    {
        if (!$this->transplants->contains($transplant)) {
            $this->transplants[] = $transplant;
            $transplant->setGreenhouse($this);
        }

        return $this;
    }

    public function removeTransplant(Transplant $transplant): self
    {
        if ($this->transplants->contains($transplant)) {
            $this->transplants->removeElement($transplant);
            // set the owning side to null (unless already changed)
            if ($transplant->getGreenhouse() === $this) {
                $transplant->setGreenhouse(null);
            }
        }

        return $this;
    }
}
