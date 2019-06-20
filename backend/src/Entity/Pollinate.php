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
 * @ORM\Entity(repositoryClass="App\Repository\PollinateRepository")
 */
class Pollinate
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
    private $startedAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endedAt;

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
     * @Groups({"read"})
     * @ORM\Column(type="boolean")
     * @Assert\NotNull
     */
    private $isApproved;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\Greenhouse", inversedBy="pollinates")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $greenhouse;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\Assignment", inversedBy="pollinates")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $assignment;

    public function __construct()
    {
        $this->isApproved = false;
    }

    public function getId():  ? int
    {
        return $this->id;
    }

    public function getStartedAt() :  ? \DateTimeInterface
    {
        return $this->startedAt;
    }

    public function setStartedAt( ? \DateTimeInterface $startedAt) : self
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    public function getEndedAt() :  ? \DateTimeInterface
    {
        return $this->endedAt;
    }

    public function setEndedAt( ? \DateTimeInterface $endedAt) : self
    {
        $this->endedAt = $endedAt;

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

    public function getIsApproved() :  ? bool
    {
        return $this->isApproved;
    }

    public function setIsApproved(bool $isApproved) : self
    {
        $this->isApproved = $isApproved;

        return $this;
    }

    public function getGreenhouse():  ? Greenhouse
    {
        return $this->greenhouse;
    }

    public function setGreenhouse( ? Greenhouse $greenhouse) : self
    {
        $this->greenhouse = $greenhouse;

        return $this;
    }

    public function getAssignment() :  ? Assignment
    {
        return $this->assignment;
    }

    public function setAssignment( ? Assignment $assignment) : self
    {
        $this->assignment = $assignment;

        return $this;
    }
}
