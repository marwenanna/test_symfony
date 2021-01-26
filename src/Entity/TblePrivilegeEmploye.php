<?php

namespace App\Entity;

use App\Repository\TblePrivilegeEmployeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TblePrivilegeEmployeRepository::class)
 */
class TblePrivilegeEmploye
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity=TbleEmploye::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_employe;

    /**
     * @ORM\ManyToOne(targetEntity=TblePrivilege::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_privilege;

    public function getIdEmploye(): ?TbleEmploye
    {
        return $this->id_employe;
    }

    public function setId(TbleEmploye $id_employe): self
    {
        $this->id_employe = $id_employe;

        return $this;
    }

    public function getIdPrivilege(): ?int
    {
        return $this->id_privilege;
    }

    public function setIdPrivilege(int $id_privilege): self
    {
        $this->id_privilege = $id_privilege;

        return $this;
    }
}
