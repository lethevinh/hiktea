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
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 * @UniqueEntity("email")
 * @UniqueEntity("name")
 */
class Customer
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
     * @ORM\Column(type="string", length=255)
     * @Groups({"write", "read"})
     * @Assert\NotNull
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"write", "read"})
     * @Assert\NotNull
     * @Assert\Email
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Variety", mappedBy="customer", orphanRemoval=true)
     */
    private $varieties;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Order", mappedBy="customer", orphanRemoval=true)
     */
    private $orders;

    public function __construct()
    {
        $this->varieties = new ArrayCollection();
        $this->orders = new ArrayCollection();
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

    public function getEmail():  ? string
    {
        return $this->email;
    }

    public function setEmail(string $email) : self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Collection|Variety[]
     */
    public function getVarieties(): Collection
    {
        return $this->varieties;
    }

    public function addVariety(Variety $variety): self
    {
        if (!$this->varieties->contains($variety)) {
            $this->varieties[] = $variety;
            $variety->setCustomer($this);
        }

        return $this;
    }

    public function removeVariety(Variety $variety): self
    {
        if ($this->varieties->contains($variety)) {
            $this->varieties->removeElement($variety);
            // set the owning side to null (unless already changed)
            if ($variety->getCustomer() === $this) {
                $variety->setCustomer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Order[]
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->setCustomer($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): self
    {
        if ($this->orders->contains($order)) {
            $this->orders->removeElement($order);
            // set the owning side to null (unless already changed)
            if ($order->getCustomer() === $this) {
                $order->setCustomer(null);
            }
        }

        return $this;
    }
}
