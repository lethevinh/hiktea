<?php

namespace App\Entity\Traits;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

trait BlameableTrait
{
    /**
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $createdBy;

    /**
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(name="updated_by", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $updatedBy;

    public function setCreatedBy(User $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedBy():  ? User
    {
        return $this->createdBy;
    }

    public function setUpdatedBy(User $updatedBy) : self
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }

    public function getUpdatedBy():  ? User
    {
        return $this->updatedBy;
    }
}
