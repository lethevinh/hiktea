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
 * @ORM\Entity(repositoryClass="App\Repository\TransplantRepository")
 */
class Transplant
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
     * @ORM\Column(type="string", length=1)
     * @Assert\NotNull
     */
    private $gender;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $transplantedAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="float", nullable=true)
     */
    private $plantsCount;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $expectedTransplantAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $expectedProcessOldSoilAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $expectedPrepareNewSoilAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="boolean")
     * @Assert\NotNull
     */
    private $isApproved;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\Assignment", inversedBy="transplants")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $assignment;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\Greenhouse", inversedBy="transplants")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $greenhouse;

    public function __construct()
    {
        $this->isApproved = false;
    }

    public function getId():  ? int
    {
        return $this->id;
    }

    public function getGender() :  ? string
    {
        return $this->gender;
    }

    public function setGender(string $gender) : self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getTransplantedAt():  ? \DateTimeInterface
    {
        return $this->transplantedAt;
    }

    public function setTransplantedAt( ? \DateTimeInterface $transplantedAt) : self
    {
        $this->transplantedAt = $transplantedAt;

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

    public function getExpectedTransplantAt() :  ? \DateTimeInterface
    {
        return $this->expectedTransplantAt;
    }

    public function setExpectedTransplantAt( ? \DateTimeInterface $expectedTransplantAt) : self
    {
        $this->expectedTransplantAt = $expectedTransplantAt;

        return $this;
    }

    public function getExpectedProcessOldSoilAt() :  ? \DateTimeInterface
    {
        return $this->expectedProcessOldSoilAt;
    }

    public function setExpectedProcessOldSoilAt( ? \DateTimeInterface $expectedProcessOldSoilAt) : self
    {
        $this->expectedProcessOldSoilAt = $expectedProcessOldSoilAt;

        return $this;
    }

    public function getExpectedPrepareNewSoilAt() :  ? \DateTimeInterface
    {
        return $this->expectedPrepareNewSoilAt;
    }

    public function setExpectedPrepareNewSoilAt( ? \DateTimeInterface $expectedPrepareNewSoilAt) : self
    {
        $this->expectedPrepareNewSoilAt = $expectedPrepareNewSoilAt;

        return $this;
    }

    public function getIsApproved() :  ? bool
    {
        return $this->isApproved;
    }

    public function setIsApproved(bool $isApproved) : self
    {
        $this->isApproved = $isApproved;

        return $this;
    }

    public function getAssignment():  ? Assignment
    {
        return $this->assignment;
    }

    public function setAssignment( ? Assignment $assignment) : self
    {
        $this->assignment = $assignment;

        return $this;
    }

    public function getGreenhouse() :  ? Greenhouse
    {
        return $this->greenhouse;
    }

    public function setGreenhouse( ? Greenhouse $greenhouse) : self
    {
        $this->greenhouse = $greenhouse;

        return $this;
    }
}
