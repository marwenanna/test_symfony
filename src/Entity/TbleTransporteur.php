<?php

namespace App\Entity;

use App\Repository\TbleTransporteurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleTransporteurRepository::class)
 */
class TbleTransporteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleLivraisonCde::class, mappedBy="transporteur_livraison")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $pris_en_charge_par_transporteur;

    /**
     * @ORM\Column(type="date")
     */
    private $date_ajout_transporteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vehicule_transporteur;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $nature;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $raison_social_transporteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricule_fiscale_transporteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_complet_transporteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession_transporteur;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tel1_trp;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tel2_trp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_trp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_trp;

    /**
     * @ORM\Column(type="integer")
     */
    private $gouvernorat_trp;

    /**
     * @ORM\Column(type="text")
     */
    private $notes_trp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_trp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_trp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $full_name_trp;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    public function getPrisEnChargeParTransporteur(): ?int
    {
        return $this->pris_en_charge_par_transporteur;
    }

    public function setPrisEnChargeParTransporteur(int $pris_en_charge_par_transporteur): self
    {
        $this->pris_en_charge_par_transporteur = $pris_en_charge_par_transporteur;

        return $this;
    }

    public function getDateAjoutTransporteur(): ?\DateTimeInterface
    {
        return $this->date_ajout_transporteur;
    }

    public function setDateAjoutTransporteur(\DateTimeInterface $date_ajout_transporteur): self
    {
        $this->date_ajout_transporteur = $date_ajout_transporteur;

        return $this;
    }

    public function getVehiculeTransporteur(): ?string
    {
        return $this->vehicule_transporteur;
    }

    public function setVehiculeTransporteur(string $vehicule_transporteur): self
    {
        $this->vehicule_transporteur = $vehicule_transporteur;

        return $this;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(string $nature): self
    {
        $this->nature = $nature;

        return $this;
    }

    public function getRaisonSocialTransporteur(): ?string
    {
        return $this->raison_social_transporteur;
    }

    public function setRaisonSocialTransporteur(string $raison_social_transporteur): self
    {
        $this->raison_social_transporteur = $raison_social_transporteur;

        return $this;
    }

    public function getMatriculeFiscaleTransporteur(): ?string
    {
        return $this->matricule_fiscale_transporteur;
    }

    public function setMatriculeFiscaleTransporteur(string $matricule_fiscale_transporteur): self
    {
        $this->matricule_fiscale_transporteur = $matricule_fiscale_transporteur;

        return $this;
    }

    public function getNomCompletTransporteur(): ?string
    {
        return $this->nom_complet_transporteur;
    }

    public function setNomCompletTransporteur(string $nom_complet_transporteur): self
    {
        $this->nom_complet_transporteur = $nom_complet_transporteur;

        return $this;
    }

    public function getProfessionTransporteur(): ?string
    {
        return $this->profession_transporteur;
    }

    public function setProfessionTransporteur(string $profession_transporteur): self
    {
        $this->profession_transporteur = $profession_transporteur;

        return $this;
    }

    public function getTel1Trp(): ?string
    {
        return $this->tel1_trp;
    }

    public function setTel1Trp(string $tel1_trp): self
    {
        $this->tel1_trp = $tel1_trp;

        return $this;
    }

    public function getTel2Trp(): ?string
    {
        return $this->tel2_trp;
    }

    public function setTel2Trp(string $tel2_trp): self
    {
        $this->tel2_trp = $tel2_trp;

        return $this;
    }

    public function getEmailTrp(): ?string
    {
        return $this->email_trp;
    }

    public function setEmailTrp(string $email_trp): self
    {
        $this->email_trp = $email_trp;

        return $this;
    }

    public function getAdresseTrp(): ?string
    {
        return $this->adresse_trp;
    }

    public function setAdresseTrp(string $adresse_trp): self
    {
        $this->adresse_trp = $adresse_trp;

        return $this;
    }

    public function getGouvernoratTrp(): ?int
    {
        return $this->gouvernorat_trp;
    }

    public function setGouvernoratTrp(int $gouvernorat_trp): self
    {
        $this->gouvernorat_trp = $gouvernorat_trp;

        return $this;
    }

    public function getNotesTrp(): ?string
    {
        return $this->notes_trp;
    }

    public function setNotesTrp(string $notes_trp): self
    {
        $this->notes_trp = $notes_trp;

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

    public function getNomTrp(): ?string
    {
        return $this->nom_trp;
    }

    public function setNomTrp(string $nom_trp): self
    {
        $this->nom_trp = $nom_trp;

        return $this;
    }

    public function getPrenomTrp(): ?string
    {
        return $this->prenom_trp;
    }

    public function setPrenomTrp(string $prenom_trp): self
    {
        $this->prenom_trp = $prenom_trp;

        return $this;
    }

    public function getFullNameTrp(): ?string
    {
        return $this->full_name_trp;
    }

    public function setFullNameTrp(string $full_name_trp): self
    {
        $this->full_name_trp = $full_name_trp;

        return $this;
    }
}
