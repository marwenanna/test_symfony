<?php

namespace App\Entity;

use App\Repository\TbleOrdreAchatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleOrdreAchatRepository::class)
 */
class TbleOrdreAchat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleDetailCommande::class, mappedBy="id_ordre_achat_det")
     * @ORM\OneToMany(targetEntity=TbleDetailOrdreAchat::class, mappedBy="id_ordre_achat")
     * @ORM\OneToMany(targetEntity=TblePaiementFRS::class, mappedBy="id_OA_frs")
     * @ORM\OneToMany(targetEntity=TbleDepenses::class, mappedBy="id_bc_depenses")
     */
    private $id;

     /**
     * @ORM\Column(type="integer")
     */
    private $num_bc;

    /**
     * @ORM\ManyToOne(targetEntity=TbleFournisseur::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fournisseurID_;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $reference_devis_frs;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_devis_frs;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye1::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cree_par;

    /**
     * @ORM\Column(type="date")
     */
    private $date_soumission;

    /**
     * @ORM\Column(type="date")
     */
    private $date_creation;

    /**
     * @ORM\ManyToOne(targetEntity=TbleStatutOrdreAchat::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $status_OA_ID;

    /**
     * @ORM\Column(type="date")
     */
    private $date_prevu;

    /**
     * @ORM\Column(type="float")
     */
    private $frais_livraison;

    /**
     * @ORM\Column(type="float")
     */
    private $taxes;

    /**
     * @ORM\Column(type="date")
     */
    private $date_paiement;

    /**
     * @ORM\Column(type="float")
     */
    private $montant_paye;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $methode_payement;

    /**
     * @ORM\Column(type="text")
     */
    private $notes;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $aprouve_par;

    /**
     * @ORM\Column(type="date")
     */
    private $date_aprobation;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye2::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $soumise_par;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    public function getNumBc(): ?int
    {
        return $this->num_bc;
    }

    public function setNumBc(int $num_bc): self
    {
        $this->num_bc = $num_bc;

        return $this;
    }

    public function getFournisseurID(): ?int
    {
        return $this->fournisseurID_;
    }

    public function setFournisseurID(int $fournisseurID_): self
    {
        $this->fournisseurID_ = $fournisseurID_;

        return $this;
    }

    public function getReferenceDevisFrs(): ?string
    {
        return $this->reference_devis_frs;
    }

    public function setReferenceDevisFrs(string $reference_devis_frs): self
    {
        $this->reference_devis_frs = $reference_devis_frs;

        return $this;
    }

    public function getDateDevisFrs(): ?\DateTimeInterface
    {
        return $this->date_devis_frs;
    }

    public function setDateDevisFrs(\DateTimeInterface $date_devis_frs): self
    {
        $this->date_devis_frs = $date_devis_frs;

        return $this;
    }

    public function getCreePar(): ?int
    {
        return $this->cree_par;
    }

    public function setCreePar(int $cree_par): self
    {
        $this->cree_par = $cree_par;

        return $this;
    }

    public function getDateSoumission(): ?\DateTimeInterface
    {
        return $this->date_soumission;
    }

    public function setDateSoumission(\DateTimeInterface $date_soumission): self
    {
        $this->date_soumission = $date_soumission;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getStatusOAID(): ?int
    {
        return $this->status_OA_ID;
    }

    public function setStatusOAID(int $status_OA_ID): self
    {
        $this->status_OA_ID = $status_OA_ID;

        return $this;
    }

    public function getDatePrevu(): ?\DateTimeInterface
    {
        return $this->date_prevu;
    }

    public function setDatePrevu(\DateTimeInterface $date_prevu): self
    {
        $this->date_prevu = $date_prevu;

        return $this;
    }

    public function getFraisLivraison(): ?float
    {
        return $this->frais_livraison;
    }

    public function setFraisLivraison(float $frais_livraison): self
    {
        $this->frais_livraison = $frais_livraison;

        return $this;
    }

    public function getTaxes(): ?float
    {
        return $this->taxes;
    }

    public function setTaxes(float $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->date_paiement;
    }

    public function setDatePaiement(\DateTimeInterface $date_paiement): self
    {
        $this->date_paiement = $date_paiement;

        return $this;
    }

    public function getMontantPaye(): ?float
    {
        return $this->montant_paye;
    }

    public function setMontantPaye(float $montant_paye): self
    {
        $this->montant_paye = $montant_paye;

        return $this;
    }

    public function getMethodePayement(): ?string
    {
        return $this->methode_payement;
    }

    public function setMethodePayement(string $methode_payement): self
    {
        $this->methode_payement = $methode_payement;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getAprouvePar(): ?int
    {
        return $this->aprouve_par;
    }

    public function setAprouvePar(int $aprouve_par): self
    {
        $this->aprouve_par = $aprouve_par;

        return $this;
    }

    public function getDateAprobation(): ?\DateTimeInterface
    {
        return $this->date_aprobation;
    }

    public function setDateAprobation(\DateTimeInterface $date_aprobation): self
    {
        $this->date_aprobation = $date_aprobation;

        return $this;
    }

    public function getSoumisePar(): ?int
    {
        return $this->soumise_par;
    }

    public function setSoumisePar(int $soumise_par): self
    {
        $this->soumise_par = $soumise_par;

        return $this;
    }
}
