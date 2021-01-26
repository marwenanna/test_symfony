<?php

namespace App\Entity;

use App\Repository\TbleCommandeCltRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleCommandeCltRepository::class)
 */
class TbleCommandeClt
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleOperationInventaire::class, mappedBy="commande_client_id")
     * @ORM\OneToMany(targetEntity=TbleLivraisonCde::class, mappedBy="id_commande_livraison")
     * @ORM\OneToMany(targetEntity=TbleDetailCommande::class, mappedBy="id_commande_det")
     * @ORM\OneToMany(targetEntity=TbleFacture::class, mappedBy="id_commande_facture")
     * @ORM\OneToMany(targetEntity=TblePaiement::class, mappedBy="id_commande_pnt")
     * @ORM\OneToMany(targetEntity=TbleDepenses::class, mappedBy="id_commande_depenses")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_commande;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commande_par;

    /**
     * @ORM\Column(type="time")
     */
    private $temps_commande;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_commande;

    /**
     * @ORM\ManyToOne(targetEntity=TbleProspectClient::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client_commande;

    /**
     * @ORM\ManyToOne(targetEntity=TbleAffaire::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_affaire_cde;

    /**
     * @ORM\Column(type="text")
     */
    private $resume_commande;

    /**
     * @ORM\Column(type="boolean")
     */
    private $facture_devis;

    /**
     * @ORM\Column(type="boolean")
     */
    private $payer;

    /**
     * @ORM\Column(type="boolean")
     */
    private $valider;

    /**
     * @ORM\ManyToOne(targetEntity=TbleStatutCommande::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $statut_cde;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num_devis;

    /**
     * @ORM\Column(type="date")
     */
    private $date_devis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num_facture;

    /**
     * @ORM\Column(type="date")
     */
    private $date_facture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num_bl;

    /**
     * @ORM\Column(type="date")
     */
    private $date_bl;

    /**
     * @ORM\Column(type="boolean")
     */
    private $livrer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $suivi_commande_interne;

    /**
     * @ORM\Column(type="text")
     */
    private $remarques_cde;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye1::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $traiter_par_cde;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_facture;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_devis;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_bon_livraison;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_devis;

    /**
     * @ORM\ManyToOne(targetEntity=TbleFacture1::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_facture;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_bl;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_soumission;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_approbation_rejet;

    /**
     * @ORM\Column(type="float")
     */
    private $tva_commande;

    /**
     * @ORM\Column(type="float")
     */
    private $livraison_commande;

    /**
     * @ORM\Column(type="float")
     */
    private $total_commande;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    public function getNumCommande(): ?int
    {
        return $this->num_commande;
    }

    public function setNumCommande(int $num_commande): self
    {
        $this->num_commande = $num_commande;

        return $this;
    }

    public function getCommandePar(): ?int
    {
        return $this->commande_par;
    }

    public function setCommandePar(int $commande_par): self
    {
        $this->commande_par = $commande_par;

        return $this;
    }

    public function getTempsCommande(): ?\DateTimeInterface
    {
        return $this->temps_commande;
    }

    public function setTempsCommande(\DateTimeInterface $temps_commande): self
    {
        $this->temps_commande = $temps_commande;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->date_commande;
    }

    public function setDateCommande(\DateTimeInterface $date_commande): self
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    public function getClientCommande(): ?int
    {
        return $this->client_commande;
    }

    public function setClientCommande(int $client_commande): self
    {
        $this->client_commande = $client_commande;

        return $this;
    }

    public function getIdAffaireCde(): ?int
    {
        return $this->id_affaire_cde;
    }

    public function setIdAffaireCde(int $id_affaire_cde): self
    {
        $this->id_affaire_cde = $id_affaire_cde;

        return $this;
    }

    public function getResumeCommande(): ?string
    {
        return $this->resume_commande;
    }

    public function setResumeCommande(string $resume_commande): self
    {
        $this->resume_commande = $resume_commande;

        return $this;
    }

    public function getFactureDevis(): ?bool
    {
        return $this->facture_devis;
    }

    public function setFactureDevis(bool $facture_devis): self
    {
        $this->facture_devis = $facture_devis;

        return $this;
    }

    public function getPayer(): ?bool
    {
        return $this->payer;
    }

    public function setPayer(bool $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function getValider(): ?bool
    {
        return $this->valider;
    }

    public function setValider(bool $valider): self
    {
        $this->valider = $valider;

        return $this;
    }

    public function getStatutCde(): ?int
    {
        return $this->statut_cde;
    }

    public function setStatutCde(int $statut_cde): self
    {
        $this->statut_cde = $statut_cde;

        return $this;
    }

    public function getNumDevis(): ?string
    {
        return $this->num_devis;
    }

    public function setNumDevis(string $num_devis): self
    {
        $this->num_devis = $num_devis;

        return $this;
    }

    public function getDateDevis(): ?\DateTimeInterface
    {
        return $this->date_devis;
    }

    public function setDateDevis(\DateTimeInterface $date_devis): self
    {
        $this->date_devis = $date_devis;

        return $this;
    }

    public function getNumFacture(): ?string
    {
        return $this->num_facture;
    }

    public function setNumFacture(string $num_facture): self
    {
        $this->num_facture = $num_facture;

        return $this;
    }

    public function getDateFacture(): ?\DateTimeInterface
    {
        return $this->date_facture;
    }

    public function setDateFacture(\DateTimeInterface $date_facture): self
    {
        $this->date_facture = $date_facture;

        return $this;
    }

    public function getNumBl(): ?string
    {
        return $this->num_bl;
    }

    public function setNumBl(string $num_bl): self
    {
        $this->num_bl = $num_bl;

        return $this;
    }

    public function getDateBl(): ?\DateTimeInterface
    {
        return $this->date_bl;
    }

    public function setDateBl(\DateTimeInterface $date_bl): self
    {
        $this->date_bl = $date_bl;

        return $this;
    }

    public function getLivrer(): ?bool
    {
        return $this->livrer;
    }

    public function setLivrer(bool $livrer): self
    {
        $this->livrer = $livrer;

        return $this;
    }

    public function getSuiviCommandeInterne(): ?string
    {
        return $this->suivi_commande_interne;
    }

    public function setSuiviCommandeInterne(string $suivi_commande_interne): self
    {
        $this->suivi_commande_interne = $suivi_commande_interne;

        return $this;
    }

    public function getRemarquesCde(): ?string
    {
        return $this->remarques_cde;
    }

    public function setRemarquesCde(string $remarques_cde): self
    {
        $this->remarques_cde = $remarques_cde;

        return $this;
    }

    public function getTraiterParCde(): ?int
    {
        return $this->traiter_par_cde;
    }

    public function setTraiterParCde(int $traiter_par_cde): self
    {
        $this->traiter_par_cde = $traiter_par_cde;

        return $this;
    }

    public function getIsFacture(): ?bool
    {
        return $this->is_facture;
    }

    public function setIsFacture(bool $is_facture): self
    {
        $this->is_facture = $is_facture;

        return $this;
    }

    public function getIsDevis(): ?bool
    {
        return $this->is_devis;
    }

    public function setIsDevis(bool $is_devis): self
    {
        $this->is_devis = $is_devis;

        return $this;
    }

    public function getIsBonLivraison(): ?bool
    {
        return $this->is_bon_livraison;
    }

    public function setIsBonLivraison(bool $is_bon_livraison): self
    {
        $this->is_bon_livraison = $is_bon_livraison;

        return $this;
    }

    public function getIdDevis(): ?int
    {
        return $this->id_devis;
    }

    public function setIdDevis(int $id_devis): self
    {
        $this->id_devis = $id_devis;

        return $this;
    }

    public function getIdFacture(): ?int
    {
        return $this->id_facture;
    }

    public function setIdFacture(int $id_facture): self
    {
        $this->id_facture = $id_facture;

        return $this;
    }

    public function getIdBl(): ?int
    {
        return $this->id_bl;
    }

    public function setIdBl(int $id_bl): self
    {
        $this->id_bl = $id_bl;

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

    public function getDateApprobationRejet(): ?\DateTimeInterface
    {
        return $this->date_approbation_rejet;
    }

    public function setDateApprobationRejet(\DateTimeInterface $date_approbation_rejet): self
    {
        $this->date_approbation_rejet = $date_approbation_rejet;

        return $this;
    }

    public function getTvaCommande(): ?float
    {
        return $this->tva_commande;
    }

    public function setTvaCommande(float $tva_commande): self
    {
        $this->tva_commande = $tva_commande;

        return $this;
    }

    public function getLivraisonCommande(): ?float
    {
        return $this->livraison_commande;
    }

    public function setLivraisonCommande(float $livraison_commande): self
    {
        $this->livraison_commande = $livraison_commande;

        return $this;
    }

    public function getTotalCommande(): ?float
    {
        return $this->total_commande;
    }

    public function setTotalCommande(float $total_commande): self
    {
        $this->total_commande = $total_commande;

        return $this;
    }
}
