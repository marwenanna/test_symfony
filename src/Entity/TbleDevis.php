<?php

namespace App\Entity;

use App\Repository\TbleDevisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleDevisRepository::class)
 */
class TbleDevis
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_devis;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_affaires_devis;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_commande_devis;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_devis;

    /**
     * @ORM\Column(type="date")
     */
    private $date_remise_client_devis;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $traiter_par;

    /**
     * @ORM\Column(type="integer")
     */
    private $valide_pour_devis;

    /**
     * @ORM\Column(type="integer")
     */
    private $client_devis;

    /**
     * @ORM\Column(type="text")
     */
    private $expiration_date_devis;

    /**
     * @ORM\Column(type="float")
     */
    private $TVA_devis;

    /**
     * @ORM\Column(type="float")
     */
    private $livraison_devis;

    /**
     * @ORM\Column(type="float")
     */
    private $total_devis;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_submitted_devis;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_approuved;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_rejected;

    /**
     * @ORM\Column(type="boolean")
     */
    private $en_commande;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_invoiced_devis;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_active_devis;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_new_devis;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_commande_devis;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $condition_paiement_devis;

    /**
     * @ORM\Column(type="integer")
     */
    private $statut_devis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $notes_devis;

    /**
     * @ORM\Column(type="datetime")
     */
    private $closed_date_devis;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_soumission;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_approbation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_rejet;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_transfert_facture;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_transfert_commande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumDevis(): ?int
    {
        return $this->num_devis;
    }

    public function setNumDevis(int $num_devis): self
    {
        $this->num_devis = $num_devis;

        return $this;
    }

    public function getIdAffairesDevis(): ?int
    {
        return $this->id_affaires_devis;
    }

    public function setIdAffairesDevis(int $id_affaires_devis): self
    {
        $this->id_affaires_devis = $id_affaires_devis;

        return $this;
    }

    public function getIdCommandeDevis(): ?int
    {
        return $this->id_commande_devis;
    }

    public function setIdCommandeDevis(int $id_commande_devis): self
    {
        $this->id_commande_devis = $id_commande_devis;

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

    public function getDateRemiseClientDevis(): ?\DateTimeInterface
    {
        return $this->date_remise_client_devis;
    }

    public function setDateRemiseClientDevis(\DateTimeInterface $date_remise_client_devis): self
    {
        $this->date_remise_client_devis = $date_remise_client_devis;

        return $this;
    }

    public function getTraiterPar(): ?int
    {
        return $this->traiter_par;
    }

    public function setTraiterPar(int $traiter_par): self
    {
        $this->traiter_par = $traiter_par;

        return $this;
    }

    public function getValidePourDevis(): ?int
    {
        return $this->valide_pour_devis;
    }

    public function setValidePourDevis(int $valide_pour_devis): self
    {
        $this->valide_pour_devis = $valide_pour_devis;

        return $this;
    }

    public function getClientDevis(): ?int
    {
        return $this->client_devis;
    }

    public function setClientDevis(int $client_devis): self
    {
        $this->client_devis = $client_devis;

        return $this;
    }

    public function getExpirationDateDevis(): ?string
    {
        return $this->expiration_date_devis;
    }

    public function setExpirationDateDevis(string $expiration_date_devis): self
    {
        $this->expiration_date_devis = $expiration_date_devis;

        return $this;
    }

    public function getTVADevis(): ?float
    {
        return $this->TVA_devis;
    }

    public function setTVADevis(float $TVA_devis): self
    {
        $this->TVA_devis = $TVA_devis;

        return $this;
    }

    public function getLivraisonDevis(): ?float
    {
        return $this->livraison_devis;
    }

    public function setLivraisonDevis(float $livraison_devis): self
    {
        $this->livraison_devis = $livraison_devis;

        return $this;
    }

    public function getTotalDevis(): ?float
    {
        return $this->total_devis;
    }

    public function setTotalDevis(float $total_devis): self
    {
        $this->total_devis = $total_devis;

        return $this;
    }

    public function getIsSubmittedDevis(): ?bool
    {
        return $this->is_submitted_devis;
    }

    public function setIsSubmittedDevis(bool $is_submitted_devis): self
    {
        $this->is_submitted_devis = $is_submitted_devis;

        return $this;
    }

    public function getIsApprouved(): ?bool
    {
        return $this->is_approuved;
    }

    public function setIsApprouved(bool $is_approuved): self
    {
        $this->is_approuved = $is_approuved;

        return $this;
    }

    public function getIsRejected(): ?bool
    {
        return $this->is_rejected;
    }

    public function setIsRejected(bool $is_rejected): self
    {
        $this->is_rejected = $is_rejected;

        return $this;
    }

    public function getEnCommande(): ?bool
    {
        return $this->en_commande;
    }

    public function setEnCommande(bool $en_commande): self
    {
        $this->en_commande = $en_commande;

        return $this;
    }

    public function getIsInvoicedDevis(): ?bool
    {
        return $this->is_invoiced_devis;
    }

    public function setIsInvoicedDevis(bool $is_invoiced_devis): self
    {
        $this->is_invoiced_devis = $is_invoiced_devis;

        return $this;
    }

    public function getIsActiveDevis(): ?bool
    {
        return $this->is_active_devis;
    }

    public function setIsActiveDevis(bool $is_active_devis): self
    {
        $this->is_active_devis = $is_active_devis;

        return $this;
    }

    public function getIsNewDevis(): ?bool
    {
        return $this->is_new_devis;
    }

    public function setIsNewDevis(bool $is_new_devis): self
    {
        $this->is_new_devis = $is_new_devis;

        return $this;
    }

    public function getIsCommandeDevis(): ?bool
    {
        return $this->is_commande_devis;
    }

    public function setIsCommandeDevis(bool $is_commande_devis): self
    {
        $this->is_commande_devis = $is_commande_devis;

        return $this;
    }

    public function getConditionPaiementDevis(): ?string
    {
        return $this->condition_paiement_devis;
    }

    public function setConditionPaiementDevis(string $condition_paiement_devis): self
    {
        $this->condition_paiement_devis = $condition_paiement_devis;

        return $this;
    }

    public function getStatutDevis(): ?int
    {
        return $this->statut_devis;
    }

    public function setStatutDevis(int $statut_devis): self
    {
        $this->statut_devis = $statut_devis;

        return $this;
    }

    public function getNotesDevis(): ?string
    {
        return $this->notes_devis;
    }

    public function setNotesDevis(string $notes_devis): self
    {
        $this->notes_devis = $notes_devis;

        return $this;
    }

    public function getClosedDateDevis(): ?\DateTimeInterface
    {
        return $this->closed_date_devis;
    }

    public function setClosedDateDevis(\DateTimeInterface $closed_date_devis): self
    {
        $this->closed_date_devis = $closed_date_devis;

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

    public function getDateApprobation(): ?\DateTimeInterface
    {
        return $this->date_approbation;
    }

    public function setDateApprobation(\DateTimeInterface $date_approbation): self
    {
        $this->date_approbation = $date_approbation;

        return $this;
    }

    public function getDateRejet(): ?\DateTimeInterface
    {
        return $this->date_rejet;
    }

    public function setDateRejet(\DateTimeInterface $date_rejet): self
    {
        $this->date_rejet = $date_rejet;

        return $this;
    }

    public function getDateTransfertFacture(): ?\DateTimeInterface
    {
        return $this->date_transfert_facture;
    }

    public function setDateTransfertFacture(\DateTimeInterface $date_transfert_facture): self
    {
        $this->date_transfert_facture = $date_transfert_facture;

        return $this;
    }

    public function getDateTransfertCommande(): ?\DateTimeInterface
    {
        return $this->date_transfert_commande;
    }

    public function setDateTransfertCommande(\DateTimeInterface $date_transfert_commande): self
    {
        $this->date_transfert_commande = $date_transfert_commande;

        return $this;
    }
}
