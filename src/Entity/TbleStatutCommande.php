<?php

namespace App\Entity;

use App\Repository\TbleStatutCommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleStatutCommandeRepository::class)
 */
class TbleStatutCommande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleCommandeClt::class, mappedBy="client_commande")
     */
    private $id;

   /**
     * @ORM\Column(type="string", length=50)
     */
    private $statut_commande;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $ancien_statut;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    public function getStatutCommande(): ?string
    {
        return $this->statut_commande;
    }

    public function setStatutCommande(string $statut_commande): self
    {
        $this->statut_commande = $statut_commande;

        return $this;
    }

    public function getAncienStatut(): ?string
    {
        return $this->ancien_statut;
    }

    public function setAncienStatut(string $ancien_statut): self
    {
        $this->ancien_statut = $ancien_statut;

        return $this;
    }
}
