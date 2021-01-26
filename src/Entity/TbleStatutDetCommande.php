<?php

namespace App\Entity;

use App\Repository\TbleStatutDetCommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleStatutDetCommandeRepository::class)
 */
class TbleStatutDetCommande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleDetailCommande::class, mappedBy="id_statut_det_cde")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut_det_commande;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    public function getStatutDetCommande(): ?string
    {
        return $this->statut_det_commande;
    }

    public function setStatutDetCommande(string $statut_det_commande): self
    {
        $this->statut_det_commande = $statut_det_commande;

        return $this;
    }
}
