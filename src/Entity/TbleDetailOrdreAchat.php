<?php

namespace App\Entity;

use App\Repository\TbleDetailOrdreAchatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleDetailOrdreAchatRepository::class)
 */
class TbleDetailOrdreAchat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=TbleOrdreAchat::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_ordre_achat;

    /**
     * @ORM\ManyToOne(targetEntity=TbleProduit::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_produit;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_unitaire_ht;

    /**
     * @ORM\Column(type="date")
     */
    private $date_reception;

    /**
     * @ORM\Column(type="boolean")
     */
    private $poste_a_inventaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_inventaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdOrdreAchat(): ?int
    {
        return $this->id_ordre_achat;
    }

    public function setIdOrdreAchat(int $id_ordre_achat): self
    {
        $this->id_ordre_achat = $id_ordre_achat;

        return $this;
    }

    public function getIdProduit(): ?int
    {
        return $this->id_produit;
    }

    public function setIdProduit(int $id_produit): self
    {
        $this->id_produit = $id_produit;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixUnitaireHt(): ?float
    {
        return $this->prix_unitaire_ht;
    }

    public function setPrixUnitaireHt(float $prix_unitaire_ht): self
    {
        $this->prix_unitaire_ht = $prix_unitaire_ht;

        return $this;
    }

    public function getDateReception(): ?\DateTimeInterface
    {
        return $this->date_reception;
    }

    public function setDateReception(\DateTimeInterface $date_reception): self
    {
        $this->date_reception = $date_reception;

        return $this;
    }

    public function getPosteAInventaire(): ?bool
    {
        return $this->poste_a_inventaire;
    }

    public function setPosteAInventaire(bool $poste_a_inventaire): self
    {
        $this->poste_a_inventaire = $poste_a_inventaire;

        return $this;
    }

    public function getIdInventaire(): ?string
    {
        return $this->id_inventaire;
    }

    public function setIdInventaire(string $id_inventaire): self
    {
        $this->id_inventaire = $id_inventaire;

        return $this;
    }
}
