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
 * @ORM\Entity(repositoryClass="App\Repository\OrderItemRepository")
 */
class OrderItem
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
     * @ORM\Column(type="float")
     * @Assert\NotNull
     */
    private $quantity;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deliveredAt;

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
     * @ORM\ManyToOne(targetEntity="App\Entity\Order", inversedBy="orderItems")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $order;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\Crop", inversedBy="orderItems")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $crop;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\Variety", inversedBy="orderItems")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $variety;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\Farm", inversedBy="orderItems")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $farm;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Phase", mappedBy="orderItem", orphanRemoval=true)
     */
    private $yes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Sowing", mappedBy="orderItem", orphanRemoval=true)
     */
    private $sowings;

    public function __construct()
    {
        $this->yes = new ArrayCollection();
        $this->sowings = new ArrayCollection();
    }

    public function getId():  ? int
    {
        return $this->id;
    }

    public function getQuantity() :  ? float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity) : self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getDeliveredAt():  ? \DateTimeInterface
    {
        return $this->deliveredAt;
    }

    public function setDeliveredAt( ? \DateTimeInterface $deliveredAt) : self
    {
        $this->deliveredAt = $deliveredAt;

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

    public function getOrder() :  ? Order
    {
        return $this->order;
    }

    public function setOrder( ? Order $order) : self
    {
        $this->order = $order;

        return $this;
    }

    public function getCrop() :  ? Crop
    {
        return $this->crop;
    }

    public function setCrop( ? Crop $crop) : self
    {
        $this->crop = $crop;

        return $this;
    }

    public function getVariety() :  ? Variety
    {
        return $this->variety;
    }

    public function setVariety( ? Variety $variety) : self
    {
        $this->variety = $variety;

        return $this;
    }

    public function getFarm() :  ? Farm
    {
        return $this->farm;
    }

    public function setFarm( ? Farm $farm) : self
    {
        $this->farm = $farm;

        return $this;
    }

    /**
     * @return Collection|Phase[]
     */
    public function getYes() : Collection
    {
        return $this->yes;
    }

    public function addYe(Phase $ye): self
    {
        if (!$this->yes->contains($ye)) {
            $this->yes[] = $ye;
            $ye->setOrderItem($this);
        }

        return $this;
    }

    public function removeYe(Phase $ye): self
    {
        if ($this->yes->contains($ye)) {
            $this->yes->removeElement($ye);
            // set the owning side to null (unless already changed)
            if ($ye->getOrderItem() === $this) {
                $ye->setOrderItem(null);
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
            $sowing->setOrderItem($this);
        }

        return $this;
    }

    public function removeSowing(Sowing $sowing): self
    {
        if ($this->sowings->contains($sowing)) {
            $this->sowings->removeElement($sowing);
            // set the owning side to null (unless already changed)
            if ($sowing->getOrderItem() === $this) {
                $sowing->setOrderItem(null);
            }
        }

        return $this;
    }
}
