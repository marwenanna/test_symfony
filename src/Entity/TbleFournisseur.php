<?php

namespace App\Entity;

use App\Repository\TbleFournisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleFournisseurRepository::class)
 */
class TbleFournisseur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleOrdreAchat::class, mappedBy="fournisseurID_")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $raison_sociale_fournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_fournisseur;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tel_1_fournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_fournisseur;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pris_en_charge_par_fournisseur;

    /**
     * @ORM\Column(type="date")
     */
    private $date_ajout_fournisseur;

    /**
     * @ORM\ManyToOne(targetEntity=TbleTypeFRS::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type_fournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricule_fiscale_fournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fonction_fournisseur;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $contact_fournisseur;

    /**
     * @ORM\ManyToOne(targetEntity=TbleSecteurActivite::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $secteur_activite;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tel_2_fournisseur;

    /**
     * @ORM\Column(type="integer")
     */
    private $governorat_fournisseur;

    /**
     * @ORM\Column(type="boolean")
     */
    private $commisionaire;

    /**
     * @ORM\Column(type="float")
     */
    private $taux_commission_HT;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $notes_fournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_fournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_fournisseur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_complet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $full_name_frs;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    public function getRaisonSocialeFournisseur(): ?string
    {
        return $this->raison_sociale_fournisseur;
    }

    public function setRaisonSocialeFournisseur(string $raison_sociale_fournisseur): self
    {
        $this->raison_sociale_fournisseur = $raison_sociale_fournisseur;

        return $this;
    }

    public function getAdresseFournisseur(): ?string
    {
        return $this->adresse_fournisseur;
    }

    public function setAdresseFournisseur(string $adresse_fournisseur): self
    {
        $this->adresse_fournisseur = $adresse_fournisseur;

        return $this;
    }

    public function getTel1Fournisseur(): ?string
    {
        return $this->tel_1_fournisseur;
    }

    public function setTel1Fournisseur(string $tel_1_fournisseur): self
    {
        $this->tel_1_fournisseur = $tel_1_fournisseur;

        return $this;
    }

    public function getEmailFournisseur(): ?string
    {
        return $this->email_fournisseur;
    }

    public function setEmailFournisseur(string $email_fournisseur): self
    {
        $this->email_fournisseur = $email_fournisseur;

        return $this;
    }

    public function getPrisEnChargeParFournisseur(): ?int
    {
        return $this->pris_en_charge_par_fournisseur;
    }

    public function setPrisEnChargeParFournisseur(int $pris_en_charge_par_fournisseur): self
    {
        $this->pris_en_charge_par_fournisseur = $pris_en_charge_par_fournisseur;

        return $this;
    }

    public function getDateAjoutFournisseur(): ?\DateTimeInterface
    {
        return $this->date_ajout_fournisseur;
    }

    public function setDateAjoutFournisseur(\DateTimeInterface $date_ajout_fournisseur): self
    {
        $this->date_ajout_fournisseur = $date_ajout_fournisseur;

        return $this;
    }

    public function getTypeFournisseur(): ?int
    {
        return $this->type_fournisseur;
    }

    public function setTypeFournisseur(int $type_fournisseur): self
    {
        $this->type_fournisseur = $type_fournisseur;

        return $this;
    }

    public function getMatriculeFiscaleFournisseur(): ?string
    {
        return $this->matricule_fiscale_fournisseur;
    }

    public function setMatriculeFiscaleFournisseur(string $matricule_fiscale_fournisseur): self
    {
        $this->matricule_fiscale_fournisseur = $matricule_fiscale_fournisseur;

        return $this;
    }

    public function getFonctionFournisseur(): ?string
    {
        return $this->fonction_fournisseur;
    }

    public function setFonctionFournisseur(string $fonction_fournisseur): self
    {
        $this->fonction_fournisseur = $fonction_fournisseur;

        return $this;
    }

    public function getContactFournisseur(): ?string
    {
        return $this->contact_fournisseur;
    }

    public function setContactFournisseur(string $contact_fournisseur): self
    {
        $this->contact_fournisseur = $contact_fournisseur;

        return $this;
    }

    public function getSecteurActivite(): ?int
    {
        return $this->secteur_activite;
    }

    public function setSecteurActivite(int $secteur_activite): self
    {
        $this->secteur_activite = $secteur_activite;

        return $this;
    }

    public function getTel2Fournisseur(): ?string
    {
        return $this->tel_2_fournisseur;
    }

    public function setTel2Fournisseur(string $tel_2_fournisseur): self
    {
        $this->tel_2_fournisseur = $tel_2_fournisseur;

        return $this;
    }

    public function getGovernoratFournisseur(): ?int
    {
        return $this->governorat_fournisseur;
    }

    public function setGovernoratFournisseur(int $governorat_fournisseur): self
    {
        $this->governorat_fournisseur = $governorat_fournisseur;

        return $this;
    }

    public function getCommisionaire(): ?bool
    {
        return $this->commisionaire;
    }

    public function setCommisionaire(bool $commisionaire): self
    {
        $this->commisionaire = $commisionaire;

        return $this;
    }

    public function getTauxCommissionHT(): ?float
    {
        return $this->taux_commission_HT;
    }

    public function setTauxCommissionHT(float $taux_commission_HT): self
    {
        $this->taux_commission_HT = $taux_commission_HT;

        return $this;
    }

    public function getNotesFournisseur(): ?string
    {
        return $this->notes_fournisseur;
    }

    public function setNotesFournisseur(string $notes_fournisseur): self
    {
        $this->notes_fournisseur = $notes_fournisseur;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getNomFournisseur(): ?string
    {
        return $this->nom_fournisseur;
    }

    public function setNomFournisseur(string $nom_fournisseur): self
    {
        $this->nom_fournisseur = $nom_fournisseur;

        return $this;
    }

    public function getPrenomFournisseur(): ?string
    {
        return $this->prenom_fournisseur;
    }

    public function setPrenomFournisseur(string $prenom_fournisseur): self
    {
        $this->prenom_fournisseur = $prenom_fournisseur;

        return $this;
    }

    public function getNomComplet(): ?string
    {
        return $this->nom_complet;
    }

    public function setNomComplet(string $nom_complet): self
    {
        $this->nom_complet = $nom_complet;

        return $this;
    }

    public function getFullNameFrs(): ?string
    {
        return $this->full_name_frs;
    }

    public function setFullNameFrs(string $full_name_frs): self
    {
        $this->full_name_frs = $full_name_frs;

        return $this;
    }
}
