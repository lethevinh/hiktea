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
 * @ORM\Entity(repositoryClass="App\Repository\VarietyRepository")
 * @UniqueEntity("name")
 * @UniqueEntity("code")
 */
class Variety
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
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     */
    private $code;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="varieties")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $customer;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\OrderItem", mappedBy="variety", orphanRemoval=true)
     */
    private $orderItems;

    public function __construct()
    {
        $this->orderItems = new ArrayCollection();
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

    public function getCode():  ? string
    {
        return $this->code;
    }

    public function setCode(string $code) : self
    {
        $this->code = $code;

        return $this;
    }

    public function getCustomer():  ? Customer
    {
        return $this->customer;
    }

    public function setCustomer( ? Customer $customer) : self
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return Collection|OrderItem[]
     */
    public function getOrderItems() : Collection
    {
        return $this->orderItems;
    }

    public function addOrderItem(OrderItem $orderItem): self
    {
        if (!$this->orderItems->contains($orderItem)) {
            $this->orderItems[] = $orderItem;
            $orderItem->setVariety($this);
        }

        return $this;
    }

    public function removeOrderItem(OrderItem $orderItem): self
    {
        if ($this->orderItems->contains($orderItem)) {
            $this->orderItems->removeElement($orderItem);
            // set the owning side to null (unless already changed)
            if ($orderItem->getVariety() === $this) {
                $orderItem->setVariety(null);
            }
        }

        return $this;
    }
}
