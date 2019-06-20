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

/**
 * @ApiResource(attributes={
 *     "normalization_context"={"groups"={"read"}},
 *     "denormalization_context"={"groups"={"write"}}
 * })
 * @ApiFilter(OrderFilter::class, properties={"id"}, arguments={"orderParameterName"="order"})
 * @ORM\Entity(repositoryClass="App\Repository\SheetRepository")
 */
class Sheet
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
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $sownAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $plantedAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $stockSeedReceivedAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="float", nullable=true)
     */
    private $stockMaleSeedsCount;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="float", nullable=true)
     */
    private $stockFemaleSeedsCount;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="float", nullable=true)
     */
    private $plantsCount;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="text", nullable=true)
     */
    private $note;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $smallTransplantedAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $bigTransplantedAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $pollinateStartedAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $pollinateEndedAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $harvestStartedAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $harvestEndedAt;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Progression", mappedBy="sheet", orphanRemoval=true)
     */
    private $progressions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Assignment", mappedBy="sheet", orphanRemoval=true)
     */
    private $assignments;

    public function __construct()
    {
        $this->progressions = new ArrayCollection();
        $this->assignments = new ArrayCollection();
    }

    public function getId():  ? int
    {
        return $this->id;
    }

    public function getSownAt() :  ? \DateTimeInterface
    {
        return $this->sownAt;
    }

    public function setSownAt( ? \DateTimeInterface $sownAt) : self
    {
        $this->sownAt = $sownAt;

        return $this;
    }

    public function getPlantedAt() :  ? \DateTimeInterface
    {
        return $this->plantedAt;
    }

    public function setPlantedAt( ? \DateTimeInterface $plantedAt) : self
    {
        $this->plantedAt = $plantedAt;

        return $this;
    }

    public function getStockSeedReceivedAt() :  ? \DateTimeInterface
    {
        return $this->stockSeedReceivedAt;
    }

    public function setStockSeedReceivedAt( ? \DateTimeInterface $stockSeedReceivedAt) : self
    {
        $this->stockSeedReceivedAt = $stockSeedReceivedAt;

        return $this;
    }

    public function getStockMaleSeedsCount() :  ? float
    {
        return $this->stockMaleSeedsCount;
    }

    public function setStockMaleSeedsCount( ? float $stockMaleSeedsCount) : self
    {
        $this->stockMaleSeedsCount = $stockMaleSeedsCount;

        return $this;
    }

    public function getStockFemaleSeedsCount() :  ? float
    {
        return $this->stockFemaleSeedsCount;
    }

    public function setStockFemaleSeedsCount( ? float $stockFemaleSeedsCount) : self
    {
        $this->stockFemaleSeedsCount = $stockFemaleSeedsCount;

        return $this;
    }

    public function getPlantsCount() :  ? float
    {
        return $this->plantsCount;
    }

    public function setPlantsCount( ? float $plantsCount) : self
    {
        $this->plantsCount = $plantsCount;

        return $this;
    }

    public function getNote() :  ? string
    {
        return $this->note;
    }

    public function setNote( ? string $note) : self
    {
        $this->note = $note;

        return $this;
    }

    public function getSmallTransplantedAt() :  ? \DateTimeInterface
    {
        return $this->smallTransplantedAt;
    }

    public function setSmallTransplantedAt( ? \DateTimeInterface $smallTransplantedAt) : self
    {
        $this->smallTransplantedAt = $smallTransplantedAt;

        return $this;
    }

    public function getBigTransplantedAt() :  ? \DateTimeInterface
    {
        return $this->bigTransplantedAt;
    }

    public function setBigTransplantedAt( ? \DateTimeInterface $bigTransplantedAt) : self
    {
        $this->bigTransplantedAt = $bigTransplantedAt;

        return $this;
    }

    public function getPollinateStartedAt() :  ? \DateTimeInterface
    {
        return $this->pollinateStartedAt;
    }

    public function setPollinateStartedAt( ? \DateTimeInterface $pollinateStartedAt) : self
    {
        $this->pollinateStartedAt = $pollinateStartedAt;

        return $this;
    }

    public function getPollinateEndedAt() :  ? \DateTimeInterface
    {
        return $this->pollinateEndedAt;
    }

    public function setPollinateEndedAt( ? \DateTimeInterface $pollinateEndedAt) : self
    {
        $this->pollinateEndedAt = $pollinateEndedAt;

        return $this;
    }

    public function getHarvestStartedAt() :  ? \DateTimeInterface
    {
        return $this->harvestStartedAt;
    }

    public function setHarvestStartedAt( ? \DateTimeInterface $harvestStartedAt) : self
    {
        $this->harvestStartedAt = $harvestStartedAt;

        return $this;
    }

    public function getHarvestEndedAt() :  ? \DateTimeInterface
    {
        return $this->harvestEndedAt;
    }

    public function setHarvestEndedAt( ? \DateTimeInterface $harvestEndedAt) : self
    {
        $this->harvestEndedAt = $harvestEndedAt;

        return $this;
    }

    /**
     * @return Collection|Progression[]
     */
    public function getProgressions() : Collection
    {
        return $this->progressions;
    }

    public function addProgression(Progression $progression): self
    {
        if (!$this->progressions->contains($progression)) {
            $this->progressions[] = $progression;
            $progression->setSheet($this);
        }

        return $this;
    }

    public function removeProgression(Progression $progression): self
    {
        if ($this->progressions->contains($progression)) {
            $this->progressions->removeElement($progression);
            // set the owning side to null (unless already changed)
            if ($progression->getSheet() === $this) {
                $progression->setSheet(null);
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
            $assignment->setSheet($this);
        }

        return $this;
    }

    public function removeAssignment(Assignment $assignment): self
    {
        if ($this->assignments->contains($assignment)) {
            $this->assignments->removeElement($assignment);
            // set the owning side to null (unless already changed)
            if ($assignment->getSheet() === $this) {
                $assignment->setSheet(null);
            }
        }

        return $this;
    }
}
