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
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 * @UniqueEntity("number")
 * @ORM\Table(name="`order`")
 */
class Order
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
     * @ORM\Column(name="`number`", type="string", length=255)
     * @Assert\NotNull
     */
    private $number;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     */
    private $contract;

    /**
     * @Groups({"write", "read"})
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     */
    private $season;

    /**
     * @Groups({"write", "read"})
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="orders")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     */
    private $customer;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\OrderItem", mappedBy="customerOrder", orphanRemoval=true)
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

    public function getNumber() :  ? string
    {
        return $this->number;
    }

    public function setNumber(string $number) : self
    {
        $this->number = $number;

        return $this;
    }

    public function getContract():  ? string
    {
        return $this->contract;
    }

    public function setContract(string $contract) : self
    {
        $this->contract = $contract;

        return $this;
    }

    public function getSeason():  ? string
    {
        return $this->season;
    }

    public function setSeason(string $season) : self
    {
        $this->season = $season;

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
            $orderItem->setCustomerOrder($this);
        }

        return $this;
    }

    public function removeOrderItem(OrderItem $orderItem): self
    {
        if ($this->orderItems->contains($orderItem)) {
            $this->orderItems->removeElement($orderItem);
            // set the owning side to null (unless already changed)
            if ($orderItem->getCustomerOrder() === $this) {
                $orderItem->setCustomerOrder(null);
            }
        }

        return $this;
    }
}
