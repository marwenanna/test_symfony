<?php

namespace App\Entity;

use App\Repository\TbleDetailCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleDetailCommandeRepository::class)
 */
class TbleDetailCommande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=TbleCommandeClt::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_commande_det;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_devis_det;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_facture_det;

    /**
     * @ORM\ManyToOne(targetEntity=TbleProduit::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_produit_det;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="float")
     */
    private $remise_accordee;

    /**
     * @ORM\Column(type="boolean")
     */
    private $tva;

    /**
     * @ORM\ManyToOne(targetEntity=TbleStatutDetCommande::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_statut_det_cde;

    /**
     * @ORM\ManyToOne(targetEntity=TbleOrdreAchat::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_ordre_achat_det;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_inventaire_det;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateallouee;

    /**
     * @ORM\Column(type="boolean")
     */
    private $facture_det_cde;

    /**
     * @ORM\Column(type="boolean")
     */
    private $livrer_det_cde;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCommandeDet(): ?int
    {
        return $this->id_commande_det;
    }

    public function setIdCommandeDet(int $id_commande_det): self
    {
        $this->id_commande_det = $id_commande_det;

        return $this;
    }

    public function getIdDevisDet(): ?int
    {
        return $this->id_devis_det;
    }

    public function setIdDevisDet(int $id_devis_det): self
    {
        $this->id_devis_det = $id_devis_det;

        return $this;
    }

    public function getIdFactureDet(): ?int
    {
        return $this->id_facture_det;
    }

    public function setIdFactureDet(int $id_facture_det): self
    {
        $this->id_facture_det = $id_facture_det;

        return $this;
    }

    public function getIdProduitDet(): ?int
    {
        return $this->id_produit_det;
    }

    public function setIdProduitDet(int $id_produit_det): self
    {
        $this->id_produit_det = $id_produit_det;

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

    public function getRemiseAccordee(): ?float
    {
        return $this->remise_accordee;
    }

    public function setRemiseAccordee(float $remise_accordee): self
    {
        $this->remise_accordee = $remise_accordee;

        return $this;
    }

    public function getTva(): ?bool
    {
        return $this->tva;
    }

    public function setTva(bool $tva): self
    {
        $this->tva = $tva;

        return $this;
    }

    public function getIdStatutDetCde(): ?int
    {
        return $this->id_statut_det_cde;
    }

    public function setIdStatutDetCde(int $id_statut_det_cde): self
    {
        $this->id_statut_det_cde = $id_statut_det_cde;

        return $this;
    }

    public function getIdOrdreAchatDet(): ?int
    {
        return $this->id_ordre_achat_det;
    }

    public function setIdOrdreAchatDet(int $id_ordre_achat_det): self
    {
        $this->id_ordre_achat_det = $id_ordre_achat_det;

        return $this;
    }

    public function getIdInventaireDet(): ?string
    {
        return $this->id_inventaire_det;
    }

    public function setIdInventaireDet(string $id_inventaire_det): self
    {
        $this->id_inventaire_det = $id_inventaire_det;

        return $this;
    }

    public function getDateallouee(): ?\DateTimeInterface
    {
        return $this->dateallouee;
    }

    public function setDateallouee(\DateTimeInterface $datetime): self
    {
        $this->dateallouee = $dateallouee;

        return $this;
    }

    public function getFactureDetCde(): ?bool
    {
        return $this->facture_det_cde;
    }

    public function setFactureDetCde(bool $facture_det_cde): self
    {
        $this->facture_det_cde = $facture_det_cde;

        return $this;
    }

    public function getLivrerDetCde(): ?bool
    {
        return $this->livrer_det_cde;
    }

    public function setLivrerDetCde(bool $livrer_det_cde): self
    {
        $this->livrer_det_cde = $livrer_det_cde;

        return $this;
    }
}
