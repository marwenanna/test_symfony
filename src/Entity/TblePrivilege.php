<?php

namespace App\Entity;

use App\Repository\TblePrivilegeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TblePrivilegeRepository::class)
 */
class TblePrivilege
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TblePrivilegeEmploye::class, mappedBy="id_privilege")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=30)
     */
    private $nom_privilege;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }
    
    public function getNomPrivilege(): ?string
    {
        return $this->nom_privilege;
    }

    public function setNomPrivilege(string $nom_privilege): self
    {
        $this->nom_privilege = $nom_privilege;

        return $this;
    }
}
