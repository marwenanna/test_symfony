<?php

namespace App\Entity;

use App\Repository\TbleApporteurAffairesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleApporteurAffairesRepository::class)
 */
class TbleApporteurAffaires
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleAffaire::class, mappedBy="apporteur_affaire_aff")
     */
    private $id;


    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $genre_app_aff;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $nom_app_aff;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $prenom_app_aff;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $type_app_aff;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $nature_app_aff;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $raison_sociale_app_aff;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $matricule_fiscale_app_aff;

    /**
     * @ORM\ManyToOne(targetEntity=TbleSecteurActivite::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $secteur_activite_app_aff;

    /**
     * @ORM\Column(type="integer")
     */
    private $tel1_app_aff;

    /**
     * @ORM\Column(type="integer")
     */
    private $tel2_app_aff;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_app_aff;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_app_aff;

    /**
     * @ORM\Column(type="integer")
     */
    private $gouvernorat_app_aff;

    /**
     * @ORM\Column(type="boolean")
     */
    private $commissionaire_app_aff;

    /**
     * @ORM\Column(type="boolean")
     */
    private $facturation_app_aff;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_prenom_app_aff;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_complet_app_aff;

    /**
     * @ORM\Column(type="text")
     */
    private $notes_app_aff;

    /**
     * @ORM\Column(type="float")
     */
    private $taux_commission_app_aff;

    

    public function getGenreAppAff(): ?string
    {
        return $this->genre_app_aff;
    }

    public function setGenreAppAff(string $genre_app_aff): self
    {
        $this->genre_app_aff = $genre_app_aff;

        return $this;
    }

    public function getNomAppAff(): ?string
    {
        return $this->nom_app_aff;
    }

    public function setNomAppAff(string $nom_app_aff): self
    {
        $this->nom_app_aff = $nom_app_aff;

        return $this;
    }

    public function getPrenomAppAff(): ?string
    {
        return $this->prenom_app_aff;
    }

    public function setPrenomAppAff(string $prenom_app_aff): self
    {
        $this->prenom_app_aff = $prenom_app_aff;

        return $this;
    }

    public function getTypeAppAff(): ?string
    {
        return $this->type_app_aff;
    }

    public function setTypeAppAff(string $type_app_aff): self
    {
        $this->type_app_aff = $type_app_aff;

        return $this;
    }

    public function getNatureAppAff(): ?string
    {
        return $this->nature_app_aff;
    }

    public function setNatureAppAff(string $nature_app_aff): self
    {
        $this->nature_app_aff = $nature_app_aff;

        return $this;
    }

    public function getRaisonSocialeAppAff(): ?string
    {
        return $this->raison_sociale_app_aff;
    }

    public function setRaisonSocialeAppAff(string $raison_sociale_app_aff): self
    {
        $this->raison_sociale_app_aff = $raison_sociale_app_aff;

        return $this;
    }

    public function getMatriculeFiscaleAppAff(): ?string
    {
        return $this->matricule_fiscale_app_aff;
    }

    public function setMatriculeFiscaleAppAff(string $matricule_fiscale_app_aff): self
    {
        $this->matricule_fiscale_app_aff = $matricule_fiscale_app_aff;

        return $this;
    }

    public function getSecteurActiviteAppAff(): ?int
    {
        return $this->secteur_activite_app_aff;
    }

    public function setSecteurActiviteAppAff(int $secteur_activite_app_aff): self
    {
        $this->secteur_activite_app_aff = $secteur_activite_app_aff;

        return $this;
    }

    public function getTel1AppAff(): ?int
    {
        return $this->tel1_app_aff;
    }

    public function setTel1AppAff(int $tel1_app_aff): self
    {
        $this->tel1_app_aff = $tel1_app_aff;

        return $this;
    }

    public function getTel2AppAff(): ?int
    {
        return $this->tel2_app_aff;
    }

    public function setTel2AppAff(int $tel2_app_aff): self
    {
        $this->tel2_app_aff = $tel2_app_aff;

        return $this;
    }

    public function getEmailAppAff(): ?string
    {
        return $this->email_app_aff;
    }

    public function setEmailAppAff(string $email_app_aff): self
    {
        $this->email_app_aff = $email_app_aff;

        return $this;
    }

    public function getAdresseAppAff(): ?string
    {
        return $this->adresse_app_aff;
    }

    public function setAdresseAppAff(string $adresse_app_aff): self
    {
        $this->adresse_app_aff = $adresse_app_aff;

        return $this;
    }

    public function getGouvernoratAppAff(): ?int
    {
        return $this->gouvernorat_app_aff;
    }

    public function setGouvernoratAppAff(int $gouvernorat_app_aff): self
    {
        $this->gouvernorat_app_aff = $gouvernorat_app_aff;

        return $this;
    }

    public function getCommissionaireAppAff(): ?bool
    {
        return $this->commissionaire_app_aff;
    }

    public function setCommissionaireAppAff(bool $commissionaire_app_aff): self
    {
        $this->commissionaire_app_aff = $commissionaire_app_aff;

        return $this;
    }

    public function getFacturationAppAff(): ?bool
    {
        return $this->facturation_app_aff;
    }

    public function setFacturationAppAff(bool $facturation_app_aff): self
    {
        $this->facturation_app_aff = $facturation_app_aff;

        return $this;
    }

    public function getNomPrenomAppAff(): ?string
    {
        return $this->nom_prenom_app_aff;
    }

    public function setNomPrenomAppAff(string $nom_prenom_app_aff): self
    {
        $this->nom_prenom_app_aff = $nom_prenom_app_aff;

        return $this;
    }

    public function getNomCompletAppAff(): ?string
    {
        return $this->nom_complet_app_aff;
    }

    public function setNomCompletAppAff(string $nom_complet_app_aff): self
    {
        $this->nom_complet_app_aff = $nom_complet_app_aff;

        return $this;
    }

    public function getNotesAppAff(): ?string
    {
        return $this->notes_app_aff;
    }

    public function setNotesAppAff(string $notes_app_aff): self
    {
        $this->notes_app_aff = $notes_app_aff;

        return $this;
    }

    public function getTauxCommissionAppAff(): ?float
    {
        return $this->taux_commission_app_aff;
    }

    public function setTauxCommissionAppAff(float $taux_commission_app_aff): self
    {
        $this->taux_commission_app_aff = $taux_commission_app_aff;

        return $this;
    }
}
