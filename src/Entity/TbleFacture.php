<?php

namespace App\Entity;

use App\Repository\TbleFactureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleFactureRepository::class)
 */
class TbleFacture
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
    private $num_facture;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $traiter_par_facture;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_devis_facture;

    /**
     * @ORM\ManyToOne(targetEntity=TbleCommandeClt::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_commande_facture;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_facture;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_payee_facture;

    /**
     * @ORM\Column(type="float")
     */
    private $tva_facture;

    /**
     * @ORM\Column(type="float")
     */
    private $frais_livraison_clt_facture;

    /**
     * @ORM\Column(type="float")
     */
    private $total_facture;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $conditions_paiement_facture;

    /**
     * @ORM\ManyToOne(targetEntity=TbleProspectClient::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client_facture;

    /**
     * @ORM\ManyToOne(targetEntity=TbleAffaire::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $affaire_facture;

    /**
     * @ORM\Column(type="boolean")
     */
    private $livree_facture;

    /**
     * @ORM\Column(type="boolean")
     */
    private $paye_facture;

    /**
     * @ORM\Column(type="boolean")
     */
    private $nouveau_facture;

    /**
     * @ORM\Column(type="boolean")
     */
    private $soumise_pnt_facture;

    /**
     * @ORM\Column(type="float")
     */
    private $mois_facture;

    /**
     * @ORM\Column(type="float")
     */
    private $trimestre_facture;

    /**
     * @ORM\Column(type="integer")
     */
    private $annee;

    /**
     * @ORM\Column(type="text")
     */
    private $notes;

    /**
     * @ORM\Column(type="datetime")
     */
    private $echeance_facture;

    /**
     * @ORM\Column(type="datetime")
     */
    private $echeance_rest_facture;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_bl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumFacture(): ?int
    {
        return $this->num_facture;
    }

    public function setNumFacture(int $num_facture): self
    {
        $this->num_facture = $num_facture;

        return $this;
    }

    public function getTraiterParFacture(): ?int
    {
        return $this->traiter_par_facture;
    }

    public function setTraiterParFacture(int $traiter_par_facture): self
    {
        $this->traiter_par_facture = $traiter_par_facture;

        return $this;
    }

    public function getIdDevisFacture(): ?int
    {
        return $this->id_devis_facture;
    }

    public function setIdDevisFacture(int $id_devis_facture): self
    {
        $this->id_devis_facture = $id_devis_facture;

        return $this;
    }

    public function getIdCommandeFacture(): ?int
    {
        return $this->id_commande_facture;
    }

    public function setIdCommandeFacture(int $id_commande_facture): self
    {
        $this->id_commande_facture = $id_commande_facture;

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

    public function getDatePayeeFacture(): ?\DateTimeInterface
    {
        return $this->date_payee_facture;
    }

    public function setDatePayeeFacture(\DateTimeInterface $date_payee_facture): self
    {
        $this->date_payee_facture = $date_payee_facture;

        return $this;
    }

    public function getTvaFacture(): ?float
    {
        return $this->tva_facture;
    }

    public function setTvaFacture(float $tva_facture): self
    {
        $this->tva_facture = $tva_facture;

        return $this;
    }

    public function getFraisLivraisonCltFacture(): ?float
    {
        return $this->frais_livraison_clt_facture;
    }

    public function setFraisLivraisonCltFacture(float $frais_livraison_clt_facture): self
    {
        $this->frais_livraison_clt_facture = $frais_livraison_clt_facture;

        return $this;
    }

    public function getTotalFacture(): ?float
    {
        return $this->total_facture;
    }

    public function setTotalFacture(float $total_facture): self
    {
        $this->total_facture = $total_facture;

        return $this;
    }

    public function getConditionsPaiementFacture(): ?string
    {
        return $this->conditions_paiement_facture;
    }

    public function setConditionsPaiementFacture(string $conditions_paiement_facture): self
    {
        $this->conditions_paiement_facture = $conditions_paiement_facture;

        return $this;
    }

    public function getClientFacture(): ?int
    {
        return $this->client_facture;
    }

    public function setClientFacture(int $client_facture): self
    {
        $this->client_facture = $client_facture;

        return $this;
    }

    public function getAffaireFacture(): ?int
    {
        return $this->affaire_facture;
    }

    public function setAffaireFacture(int $affaire_facture): self
    {
        $this->affaire_facture = $affaire_facture;

        return $this;
    }

    public function getLivreeFacture(): ?bool
    {
        return $this->livree_facture;
    }

    public function setLivreeFacture(bool $livree_facture): self
    {
        $this->livree_facture = $livree_facture;

        return $this;
    }

    public function getPayeFacture(): ?bool
    {
        return $this->paye_facture;
    }

    public function setPayeFacture(bool $paye_facture): self
    {
        $this->paye_facture = $paye_facture;

        return $this;
    }

    public function getNouveauFacture(): ?bool
    {
        return $this->nouveau_facture;
    }

    public function setNouveauFacture(bool $nouveau_facture): self
    {
        $this->nouveau_facture = $nouveau_facture;

        return $this;
    }

    public function getSoumisePntFacture(): ?bool
    {
        return $this->soumise_pnt_facture;
    }

    public function setSoumisePntFacture(bool $soumise_pnt_facture): self
    {
        $this->soumise_pnt_facture = $soumise_pnt_facture;

        return $this;
    }

    public function getMoisFacture(): ?float
    {
        return $this->mois_facture;
    }

    public function setMoisFacture(float $mois_facture): self
    {
        $this->mois_facture = $mois_facture;

        return $this;
    }

    public function getTrimestreFacture(): ?float
    {
        return $this->trimestre_facture;
    }

    public function setTrimestreFacture(float $trimestre_facture): self
    {
        $this->trimestre_facture = $trimestre_facture;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(int $annee): self
    {
        $this->annee = $annee;

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

    public function getEcheanceFacture(): ?\DateTimeInterface
    {
        return $this->echeance_facture;
    }

    public function setEcheanceFacture(\DateTimeInterface $echeance_facture): self
    {
        $this->echeance_facture = $echeance_facture;

        return $this;
    }

    public function getEcheanceRestFacture(): ?\DateTimeInterface
    {
        return $this->echeance_rest_facture;
    }

    public function setEcheanceRestFacture(\DateTimeInterface $echeance_rest_facture): self
    {
        $this->echeance_rest_facture = $echeance_rest_facture;

        return $this;
    }

    public function getIsBl(): ?bool
    {
        return $this->is_bl;
    }

    public function setIsBl(bool $is_bl): self
    {
        $this->is_bl = $is_bl;

        return $this;
    }
}
