<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use App\Entity\Traits\BlameableTrait;
use App\Entity\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(attributes={
 *     "normalization_context"={"groups"={"read"}},
 *     "denormalization_context"={"groups"={"write"}}
 * })
 * @ApiFilter(OrderFilter::class, properties={"id"}, arguments={"orderParameterName"="order"})
 * @ORM\Entity(repositoryClass="App\Repository\ProgressionRepository")
 */
class Progression
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Sheet", inversedBy="progressions")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $sheet;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="string", length=5)
     * @Assert\NotNull
     */
    private $month;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="float", nullable=true)
     */
    private $fruitsCount;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="float", nullable=true)
     */
    private $seedsCount;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="float", nullable=true)
     */
    private $plantsCount;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="float", nullable=true)
     */
    private $seedsWeight;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="float", nullable=true)
     */
    private $unusablePlantsCount;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $riskGrade;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $diseaseGrade;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="text", nullable=true)
     */
    private $remarks;

    public function getId():  ? int
    {
        return $this->id;
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

    public function getMonth() :  ? string
    {
        return $this->month;
    }

    public function setMonth(string $month) : self
    {
        $this->month = $month;

        return $this;
    }

    public function getFruitsCount():  ? float
    {
        return $this->fruitsCount;
    }

    public function setFruitsCount( ? float $fruitsCount) : self
    {
        $this->fruitsCount = $fruitsCount;

        return $this;
    }

    public function getSeedsCount() :  ? float
    {
        return $this->seedsCount;
    }

    public function setSeedsCount( ? float $seedsCount) : self
    {
        $this->seedsCount = $seedsCount;

        return $this;
    }

    public function getSeedsWeight() :  ? float
    {
        return $this->seedsWeight;
    }

    public function setSeedsWeight( ? float $seedsWeight) : self
    {
        $this->seedsWeight = $seedsWeight;

        return $this;
    }

    public function getUnusablePlantsCount() :  ? float
    {
        return $this->unusablePlantsCount;
    }

    public function setUnusablePlantsCount( ? float $unusablePlantsCount) : self
    {
        $this->unusablePlantsCount = $unusablePlantsCount;

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

    public function getDiseaseGrade() :  ? string
    {
        return $this->diseaseGrade;
    }

    public function setDiseaseGrade( ? string $diseaseGrade) : self
    {
        $this->diseaseGrade = $diseaseGrade;

        return $this;
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

    public function getPlantsCount() :  ? float
    {
        return $this->plantsCount;
    }

    public function setPlantsCount( ? float $plantsCount) : self
    {
        $this->plantsCount = $plantsCount;

        return $this;
    }
}
