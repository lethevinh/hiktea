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
 * @ORM\Entity(repositoryClass="App\Repository\SowingRepository")
 */
class Sowing
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
     * @ORM\Column(type="datetime")
     * @Assert\NotNull
     */
    private $sownAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $sownSmallPotAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $sownLargePotAt;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="float")
     * @Assert\NotNull
     */
    private $plantsCount;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="float", nullable=true)
     */
    private $traysCount;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="text", nullable=true)
     */
    private $note;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="boolean")
     * @Assert\NotNull
     */
    private $isApproved;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\OrderItem", inversedBy="sowings")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $orderItem;

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

    public function getSownAt():  ? \DateTimeInterface
    {
        return $this->sownAt;
    }

    public function setSownAt(\DateTimeInterface $sownAt) : self
    {
        $this->sownAt = $sownAt;

        return $this;
    }

    public function getSownSmallPotAt():  ? \DateTimeInterface
    {
        return $this->sownSmallPotAt;
    }

    public function setSownSmallPotAt( ? \DateTimeInterface $sownSmallPotAt) : self
    {
        $this->sownSmallPotAt = $sownSmallPotAt;

        return $this;
    }

    public function getSownLargePotAt() :  ? \DateTimeInterface
    {
        return $this->sownLargePotAt;
    }

    public function setSownLargePotAt( ? \DateTimeInterface $sownLargePotAt) : self
    {
        $this->sownLargePotAt = $sownLargePotAt;

        return $this;
    }

    public function getPlantsCount() :  ? float
    {
        return $this->plantsCount;
    }

    public function setPlantsCount(float $plantsCount) : self
    {
        $this->plantsCount = $plantsCount;

        return $this;
    }

    public function getTraysCount():  ? float
    {
        return $this->traysCount;
    }

    public function setTraysCount( ? float $traysCount) : self
    {
        $this->traysCount = $traysCount;

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

    public function getOrderItem():  ? OrderItem
    {
        return $this->orderItem;
    }

    public function setOrderItem( ? OrderItem $orderItem) : self
    {
        $this->orderItem = $orderItem;

        return $this;
    }
}
