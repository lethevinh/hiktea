<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Entity\Traits\BlameableTrait;
use App\Entity\Traits\TimestampableTrait;
use App\Validator\Constraints as AppAssert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(attributes={
 *     "normalization_context"={"groups"={"read"}},
 *     "denormalization_context"={"groups"={"write"}}
 * })
 * @ApiFilter(OrderFilter::class, properties={"id"}, arguments={"orderParameterName"="order"})
 * @ApiFilter(SearchFilter::class, properties={"id": "exact", "email": "partial"})
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity("email")
 * @UniqueEntity("username")
 */
class User implements AdvancedUserInterface, \Serializable
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
     * @ORM\Column(type="string", length=255, unique=true)
     * @Groups({"write", "read"})
     * @Assert\NotNull
     * @Assert\Email
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Groups({"write", "read"})
     * @Assert\NotNull
     */
    private $username;

    /**
     * @ORM\Column(type="array")
     * @Assert\NotNull
     * @AppAssert\RolesConstraint
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"write"})
     * @Assert\NotNull
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"read"})
     * @Assert\NotNull
     */
    private $isActive;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Farm", mappedBy="user_id", orphanRemoval=true)
     */
    private $farms;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Unit", mappedBy="user")
     */
    private $units;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Greenhouse", mappedBy="user", orphanRemoval=true)
     */
    private $greenhouses;

    public function __construct()
    {
        $this->roles = ['ROLE_USER'];
        $this->isActive = true;
        $this->farms = new ArrayCollection();
        $this->units = new ArrayCollection();
        $this->greenhouses = new ArrayCollection();
    }

    public function getId():  ? int
    {
        return $this->id;
    }

    public function getEmail() :  ? string
    {
        return $this->email;
    }

    public function setEmail(string $email) : self
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername():  ? string
    {
        return $this->username;
    }

    public function setUsername(string $username) : self
    {
        $this->username = $username;

        return $this;
    }

    public function getRoles():  ? array
    {
        return $this->roles;
    }

    public function setRoles(array $roles) : self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword():  ? string
    {
        return $this->password;
    }

    public function setPassword(string $password) : self
    {
        $this->password = $password;

        return $this;
    }

    public function getIsActive():  ? bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->isActive;
    }

    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->isActive,
        ));
    }

    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->username,
            $this->password,
            $this->isActive
        ) = unserialize($serialized, array('allowed_classes' => false));
    }

    /**
     * @return Collection|Farm[]
     */
    public function getFarms(): Collection
    {
        return $this->farms;
    }

    public function addFarm(Farm $farm): self
    {
        if (!$this->farms->contains($farm)) {
            $this->farms[] = $farm;
            $farm->setUser($this);
        }

        return $this;
    }

    public function removeFarm(Farm $farm): self
    {
        if ($this->farms->contains($farm)) {
            $this->farms->removeElement($farm);
            // set the owning side to null (unless already changed)
            if ($farm->getUser() === $this) {
                $farm->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Unit[]
     */
    public function getUnits(): Collection
    {
        return $this->units;
    }

    public function addUnit(Unit $unit): self
    {
        if (!$this->units->contains($unit)) {
            $this->units[] = $unit;
            $unit->setUser($this);
        }

        return $this;
    }

    public function removeUnit(Unit $unit): self
    {
        if ($this->units->contains($unit)) {
            $this->units->removeElement($unit);
            // set the owning side to null (unless already changed)
            if ($unit->getUser() === $this) {
                $unit->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Greenhouse[]
     */
    public function getGreenhouses(): Collection
    {
        return $this->greenhouses;
    }

    public function addGreenhouse(Greenhouse $greenhouse): self
    {
        if (!$this->greenhouses->contains($greenhouse)) {
            $this->greenhouses[] = $greenhouse;
            $greenhouse->setUser($this);
        }

        return $this;
    }

    public function removeGreenhouse(Greenhouse $greenhouse): self
    {
        if ($this->greenhouses->contains($greenhouse)) {
            $this->greenhouses->removeElement($greenhouse);
            // set the owning side to null (unless already changed)
            if ($greenhouse->getUser() === $this) {
                $greenhouse->setUser(null);
            }
        }

        return $this;
    }

}
