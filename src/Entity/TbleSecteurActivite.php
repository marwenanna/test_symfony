<?php

namespace App\Entity;

use App\Repository\TbleSecteurActiviteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleSecteurActiviteRepository::class)
 */
class TbleSecteurActivite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleApporteurAffaires::class, mappedBy="secteur_activite_app_aff")
     * @ORM\OneToMany(targetEntity=TbleFournisseur::class, mappedBy="secteur_activite")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */


    public function __construct()
    {
        $this->id = new ArrayCollection();
    }


    private $activite;

    
    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }
}
