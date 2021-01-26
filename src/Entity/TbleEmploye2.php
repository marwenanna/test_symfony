<?php

namespace App\Entity;

use App\Repository\TbleEmploye2Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleEmploye2Repository::class)
 */
class TbleEmploye2
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleOrdreAchat::class, mappedBy="soumise_par")
     */
    private $id;

    
     /**
     * @ORM\Column(type="string", length=25)
     */
    private $type_employe;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $genre_employe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_employe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_employe;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tel_employe;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $adresse_employe;

    /**
     * @ORM\Column(type="integer")
     */
    private $gouvernorat_employe;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $fonction_employe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricul;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num_CNSS;

    /**
     * @ORM\Column(type="date")
     */
    private $date_embauche;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_complet_emp;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $grade;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $departement_employe;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $service_employe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CCB_CCP;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RIB_banque;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tel_2_employe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_employe;

    /**
     * @ORM\Column(type="text")
     */
    private $notes_employe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CIN;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $etat_civil;

    /**
     * @ORM\Column(type="integer")
     */
    private $enfant_a_charge;

    /**
     * @ORM\Column(type="integer")
     */
    private $jours_conge_autorise_par_mois;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_still_working;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ne_pas_afficher_alerte;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    public function getTypeEmploye(): ?string
    {
        return $this->type_employe;
    }

    public function setTypeEmploye(string $type_employe): self
    {
        $this->type_employe = $type_employe;

        return $this;
    }

    public function getGenreEmploye(): ?string
    {
        return $this->genre_employe;
    }

    public function setGenreEmploye(string $genre_employe): self
    {
        $this->genre_employe = $genre_employe;

        return $this;
    }

    public function getNomEmploye(): ?string
    {
        return $this->nom_employe;
    }

    public function setNomEmploye(string $nom_employe): self
    {
        $this->nom_employe = $nom_employe;

        return $this;
    }

    public function getPrenomEmploye(): ?string
    {
        return $this->prenom_employe;
    }

    public function setPrenomEmploye(string $prenom_employe): self
    {
        $this->prenom_employe = $prenom_employe;

        return $this;
    }

    public function getTelEmploye(): ?string
    {
        return $this->tel_employe;
    }

    public function setTelEmploye(string $tel_employe): self
    {
        $this->tel_employe = $tel_employe;

        return $this;
    }

    public function getAdresseEmploye(): ?string
    {
        return $this->adresse_employe;
    }

    public function setAdresseEmploye(string $adresse_employe): self
    {
        $this->adresse_employe = $adresse_employe;

        return $this;
    }

    public function getGouvernoratEmploye(): ?int
    {
        return $this->gouvernorat_employe;
    }

    public function setGouvernoratEmploye(int $gouvernorat_employe): self
    {
        $this->gouvernorat_employe = $gouvernorat_employe;

        return $this;
    }

    public function getFonctionEmploye(): ?string
    {
        return $this->fonction_employe;
    }

    public function setFonctionEmploye(string $fonction_employe): self
    {
        $this->fonction_employe = $fonction_employe;

        return $this;
    }

    public function getMatricul(): ?string
    {
        return $this->matricul;
    }

    public function setMatricul(string $matricul): self
    {
        $this->matricul = $matricul;

        return $this;
    }

    public function getNumCNSS(): ?string
    {
        return $this->num_CNSS;
    }

    public function setNumCNSS(string $num_CNSS): self
    {
        $this->num_CNSS = $num_CNSS;

        return $this;
    }

    public function getDateEmbauche(): ?\DateTimeInterface
    {
        return $this->date_embauche;
    }

    public function setDateEmbauche(\DateTimeInterface $date_embauche): self
    {
        $this->date_embauche = $date_embauche;

        return $this;
    }

    public function getNomCompletEmp(): ?string
    {
        return $this->nom_complet_emp;
    }

    public function setNomCompletEmp(string $nom_complet_emp): self
    {
        $this->nom_complet_emp = $nom_complet_emp;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getDepartementEmploye(): ?string
    {
        return $this->departement_employe;
    }

    public function setDepartementEmploye(string $departement_employe): self
    {
        $this->departement_employe = $departement_employe;

        return $this;
    }

    public function getServiceEmploye(): ?string
    {
        return $this->service_employe;
    }

    public function setServiceEmploye(string $service_employe): self
    {
        $this->service_employe = $service_employe;

        return $this;
    }

    public function getCCBCCP(): ?string
    {
        return $this->CCB_CCP;
    }

    public function setCCBCCP(string $CCB_CCP): self
    {
        $this->CCB_CCP = $CCB_CCP;

        return $this;
    }

    public function getRIBBanque(): ?string
    {
        return $this->RIB_banque;
    }

    public function setRIBBanque(string $RIB_banque): self
    {
        $this->RIB_banque = $RIB_banque;

        return $this;
    }

    public function getTel2Employe(): ?string
    {
        return $this->tel_2_employe;
    }

    public function setTel2Employe(string $tel_2_employe): self
    {
        $this->tel_2_employe = $tel_2_employe;

        return $this;
    }

    public function getEmailEmploye(): ?string
    {
        return $this->email_employe;
    }

    public function setEmailEmploye(string $email_employe): self
    {
        $this->email_employe = $email_employe;

        return $this;
    }

    public function getNotesEmploye(): ?string
    {
        return $this->notes_employe;
    }

    public function setNotesEmploye(string $notes_employe): self
    {
        $this->notes_employe = $notes_employe;

        return $this;
    }

    public function getNomPrenom(): ?string
    {
        return $this->nom_prenom;
    }

    public function setNomPrenom(string $nom_prenom): self
    {
        $this->nom_prenom = $nom_prenom;

        return $this;
    }

    public function getCIN(): ?string
    {
        return $this->CIN;
    }

    public function setCIN(string $CIN): self
    {
        $this->CIN = $CIN;

        return $this;
    }

    public function getEtatCivil(): ?string
    {
        return $this->etat_civil;
    }

    public function setEtatCivil(string $etat_civil): self
    {
        $this->etat_civil = $etat_civil;

        return $this;
    }

    public function getEnfantACharge(): ?int
    {
        return $this->enfant_a_charge;
    }

    public function setEnfantACharge(int $enfant_a_charge): self
    {
        $this->enfant_a_charge = $enfant_a_charge;

        return $this;
    }

    public function getJoursCongeAutoriseParMois(): ?int
    {
        return $this->jours_conge_autorise_par_mois;
    }

    public function setJoursCongeAutoriseParMois(int $jours_conge_autorise_par_mois): self
    {
        $this->jours_conge_autorise_par_mois = $jours_conge_autorise_par_mois;

        return $this;
    }

    public function getIsStillWorking(): ?bool
    {
        return $this->is_still_working;
    }

    public function setIsStillWorking(bool $is_still_working): self
    {
        $this->is_still_working = $is_still_working;

        return $this;
    }

    public function getNePasAfficherAlerte(): ?bool
    {
        return $this->ne_pas_afficher_alerte;
    }

    public function setNePasAfficherAlerte(bool $ne_pas_afficher_alerte): self
    {
        $this->ne_pas_afficher_alerte = $ne_pas_afficher_alerte;

        return $this;
    }
}
