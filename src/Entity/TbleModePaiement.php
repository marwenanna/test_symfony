<?php

namespace App\Entity;

use App\Repository\TbleModePaiementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleModePaiementRepository::class)
 */
class TbleModePaiement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TblePaiement::class, mappedBy="mode_paiement_pnt")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $mode_paiement;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }


    public function getModePaiement(): ?string
    {
        return $this->mode_paiement;
    }

    public function setModePaiement(string $mode_paiement): self
    {
        $this->mode_paiement = $mode_paiement;

        return $this;
    }
}