<?php

namespace App\Entity;

use App\Repository\TbleLivrableAttenduRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleLivrableAttenduRepository::class)
 */
class TbleLivrableAttendu
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

   /**
     * @ORM\ManyToOne(targetEntity=TbleAffaire::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_affaire_liv;

    /**
     * @ORM\Column(type="integer")
     */
    private $a_preparer_par_liv;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $proprietaire_liv;

    /**
     * @ORM\ManyToOne(targetEntity=TbleTypeLivrable::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $description_liv;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $livrable_attendu;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $suivi_livrable;

    /**
     * @ORM\Column(type="date")
     */
    private $date_remise_liv;

    /**
     * @ORM\Column(type="text")
     */
    private $commentaire_livrable;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut_liv;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin_liv;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $priorite_liv;

    /**
     * @ORM\Column(type="float")
     */
    private $avancement_pourcent_liv;

    /**
     * @ORM\Column(type="boolean")
     */
    private $message_alerte_liv;

    /**
     * @ORM\Column(type="boolean")
     */
    private $alerte_liv;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ne_pas_afficher_alerte_liv;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $etat;

    /**
     * @ORM\Column(type="float")
     */
    private $actif_liv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAffaireLiv(): ?int
    {
        return $this->id_affaire_liv;
    }

    public function setIdAffaireLiv(int $id_affaire_liv): self
    {
        $this->id_affaire_liv = $id_affaire_liv;

        return $this;
    }

    public function getAPreparerParLiv(): ?int
    {
        return $this->a_preparer_par_liv;
    }

    public function setAPreparerParLiv(int $a_preparer_par_liv): self
    {
        $this->a_preparer_par_liv = $a_preparer_par_liv;

        return $this;
    }

    public function getProprietaireLiv(): ?int
    {
        return $this->proprietaire_liv;
    }

    public function setProprietaireLiv(int $proprietaire_liv): self
    {
        $this->proprietaire_liv = $proprietaire_liv;

        return $this;
    }

    public function getDescriptionLiv(): ?int
    {
        return $this->description_liv;
    }

    public function setDescriptionLiv(int $description_liv): self
    {
        $this->description_liv = $description_liv;

        return $this;
    }

    public function getLivrableAttendu(): ?string
    {
        return $this->livrable_attendu;
    }

    public function setLivrableAttendu(string $livrable_attendu): self
    {
        $this->livrable_attendu = $livrable_attendu;

        return $this;
    }

    public function getSuiviLivrable(): ?string
    {
        return $this->suivi_livrable;
    }

    public function setSuiviLivrable(string $suivi_livrable): self
    {
        $this->suivi_livrable = $suivi_livrable;

        return $this;
    }

    public function getDateRemiseLiv(): ?\DateTimeInterface
    {
        return $this->date_remise_liv;
    }

    public function setDateRemiseLiv(\DateTimeInterface $date_remise_liv): self
    {
        $this->date_remise_liv = $date_remise_liv;

        return $this;
    }

    public function getCommentaireLivrable(): ?string
    {
        return $this->commentaire_livrable;
    }

    public function setCommentaireLivrable(string $commentaire_livrable): self
    {
        $this->commentaire_livrable = $commentaire_livrable;

        return $this;
    }

    public function getDateDebutLiv(): ?\DateTimeInterface
    {
        return $this->date_debut_liv;
    }

    public function setDateDebutLiv(\DateTimeInterface $date_debut_liv): self
    {
        $this->date_debut_liv = $date_debut_liv;

        return $this;
    }

    public function getDateFinLiv(): ?\DateTimeInterface
    {
        return $this->date_fin_liv;
    }

    public function setDateFinLiv(\DateTimeInterface $date_fin_liv): self
    {
        $this->date_fin_liv = $date_fin_liv;

        return $this;
    }

    public function getPrioriteLiv(): ?string
    {
        return $this->priorite_liv;
    }

    public function setPrioriteLiv(string $priorite_liv): self
    {
        $this->priorite_liv = $priorite_liv;

        return $this;
    }

    public function getAvancementPourcentLiv(): ?float
    {
        return $this->avancement_pourcent_liv;
    }

    public function setAvancementPourcentLiv(float $avancement_pourcent_liv): self
    {
        $this->avancement_pourcent_liv = $avancement_pourcent_liv;

        return $this;
    }

    public function getMessageAlerteLiv(): ?bool
    {
        return $this->message_alerte_liv;
    }

    public function setMessageAlerteLiv(bool $message_alerte_liv): self
    {
        $this->message_alerte_liv = $message_alerte_liv;

        return $this;
    }

    public function getAlerteLiv(): ?bool
    {
        return $this->alerte_liv;
    }

    public function setAlerteLiv(bool $alerte_liv): self
    {
        $this->alerte_liv = $alerte_liv;

        return $this;
    }

    public function getNePasAfficherAlerteLiv(): ?bool
    {
        return $this->ne_pas_afficher_alerte_liv;
    }

    public function setNePasAfficherAlerteLiv(bool $ne_pas_afficher_alerte_liv): self
    {
        $this->ne_pas_afficher_alerte_liv = $ne_pas_afficher_alerte_liv;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getActifLiv(): ?float
    {
        return $this->actif_liv;
    }

    public function setActifLiv(float $actif_liv): self
    {
        $this->actif_liv = $actif_liv;

        return $this;
    }
}
