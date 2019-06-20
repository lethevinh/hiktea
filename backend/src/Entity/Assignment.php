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
 * @ORM\Entity(repositoryClass="App\Repository\AssignmentRepository")
 */
class Assignment
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
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"write", "read"})
     */
    private $remarks;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"write", "read"})
     */
    private $diseaseGrade;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"write", "read"})
     */
    private $riskGrade;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Phase", inversedBy="assignments")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     * @Groups({"write", "read"})
     */
    private $phase;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Unit", inversedBy="assignments")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     * @Groups({"write", "read"})
     */
    private $unit;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sheet", inversedBy="assignments")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     * @Groups({"write", "read"})
     */
    private $sheet;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Harvest", mappedBy="assignment", orphanRemoval=true)
     */
    private $harvests;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pollinate", mappedBy="assignment", orphanRemoval=true)
     */
    private $pollinates;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Transplant", mappedBy="assignment", orphanRemoval=true)
     */
    private $transplants;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Sowing", mappedBy="assignment", orphanRemoval=true)
     */
    private $sowings;

    public function __construct()
    {
        $this->harvests = new ArrayCollection();
        $this->pollinates = new ArrayCollection();
        $this->transplants = new ArrayCollection();
        $this->sowings = new ArrayCollection();
    }

    public function getId():  ? int
    {
        return $this->id;
    }

    public function getRemarks() :  ? string
    {
        return $this->remarks;
    }

    public function setRemarks( ? string $remarks) : self
    {
        $this->remarks = $remarks;

        return $this;
    }

    public function getDiseaseGrade() :  ? string
    {
        return $this->diseaseGrade;
    }

    public function setDiseaseGrade( ? string $diseaseGrade) : self
    {
        $this->diseaseGrade = $diseaseGrade;

        return $this;
    }

    public function getRiskGrade() :  ? string
    {
        return $this->riskGrade;
    }

    public function setRiskGrade( ? string $riskGrade) : self
    {
        $this->riskGrade = $riskGrade;

        return $this;
    }

    public function getPhase() :  ? Phase
    {
        return $this->phase;
    }

    public function setPhase( ? Phase $phase) : self
    {
        $this->phase = $phase;

        return $this;
    }

    public function getUnit() :  ? Unit
    {
        return $this->unit;
    }

    public function setUnit( ? Unit $unit) : self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getSheet() :  ? Sheet
    {
        return $this->sheet;
    }

    public function setSheet( ? Sheet $sheet) : self
    {
        $this->sheet = $sheet;

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
            $harvest->setAssignment($this);
        }

        return $this;
    }

    public function removeHarvest(Harvest $harvest): self
    {
        if ($this->harvests->contains($harvest)) {
            $this->harvests->removeElement($harvest);
            // set the owning side to null (unless already changed)
            if ($harvest->getAssignment() === $this) {
                $harvest->setAssignment(null);
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
            $pollinate->setAssignment($this);
        }

        return $this;
    }

    public function removePollinate(Pollinate $pollinate): self
    {
        if ($this->pollinates->contains($pollinate)) {
            $this->pollinates->removeElement($pollinate);
            // set the owning side to null (unless already changed)
            if ($pollinate->getAssignment() === $this) {
                $pollinate->setAssignment(null);
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
            $transplant->setAssignment($this);
        }

        return $this;
    }

    public function removeTransplant(Transplant $transplant): self
    {
        if ($this->transplants->contains($transplant)) {
            $this->transplants->removeElement($transplant);
            // set the owning side to null (unless already changed)
            if ($transplant->getAssignment() === $this) {
                $transplant->setAssignment(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Sowing[]
     */
    public function getSowings(): Collection
    {
        return $this->sowings;
    }

    public function addSowing(Sowing $sowing): self
    {
        if (!$this->sowings->contains($sowing)) {
            $this->sowings[] = $sowing;
            $sowing->setAssignment($this);
        }

        return $this;
    }

    public function removeSowing(Sowing $sowing): self
    {
        if ($this->sowings->contains($sowing)) {
            $this->sowings->removeElement($sowing);
            // set the owning side to null (unless already changed)
            if ($sowing->getAssignment() === $this) {
                $sowing->setAssignment(null);
            }
        }

        return $this;
    }
}
