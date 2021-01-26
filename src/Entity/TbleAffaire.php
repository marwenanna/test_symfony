<?php

namespace App\Entity;

use App\Repository\TbleAffaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleAffaireRepository::class)
 */
class TbleAffaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleCommandeClt::class, mappedBy="id_affaire_cde")
     * @ORM\OneToMany(targetEntity=TbleCommandeClt::class, mappedBy="affaire_facture")
     * @ORM\OneToMany(targetEntity=TbleLivrableAttendu::class, mappedBy="affaire_facture")
     * @ORM\OneToMany(targetEntity=TbleAlarmesRappelReminders::class, mappedBy="affaire")
     * @ORM\OneToMany(targetEntity=TbleDepenses::class, mappedBy="id_affaire_depenses")
     */
    private $id;


    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

     /**
     * @ORM\Column(type="datetime")
     */
    private $date_affaire;

    /**
     * @ORM\ManyToOne(targetEntity=TblePoleAffaire::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pole_affaire;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $traiter_par;

    /**
     * @ORM\ManyToOne(targetEntity=TbleProspectClient::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $code_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resume_affaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentaires_affaire;

    /**
     * @ORM\Column(type="datetime")
     */
    private $nouvelle_relance;

    /**
     * @ORM\ManyToOne(targetEntity=TbleApporteurAffaires::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $apporteur_affaire_aff;

    /**
     * @ORM\Column(type="boolean")
     */
    private $message_alerte_aff;

    /**
     * @ORM\Column(type="boolean")
     */
    private $alerte_aff;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ne_pas_afficher_alerte_aff;

   

    public function getDateAffaire(): ?\DateTimeInterface
    {
        return $this->date_affaire;
    }

    public function setDateAffaire(\DateTimeInterface $date_affaire): self
    {
        $this->date_affaire = $date_affaire;

        return $this;
    }

    public function getPoleAffaire(): ?int
    {
        return $this->pole_affaire;
    }

    public function setPoleAffaire(int $pole_affaire): self
    {
        $this->pole_affaire = $pole_affaire;

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

    public function getCodeClient(): ?int
    {
        return $this->code_client;
    }

    public function setCodeClient(int $code_client): self
    {
        $this->code_client = $code_client;

        return $this;
    }

    public function getResumeAffaire(): ?string
    {
        return $this->resume_affaire;
    }

    public function setResumeAffaire(string $resume_affaire): self
    {
        $this->resume_affaire = $resume_affaire;

        return $this;
    }

    public function getCommentairesAffaire(): ?string
    {
        return $this->commentaires_affaire;
    }

    public function setCommentairesAffaire(string $commentaires_affaire): self
    {
        $this->commentaires_affaire = $commentaires_affaire;

        return $this;
    }

    public function getNouvelleRelance(): ?\DateTimeInterface
    {
        return $this->nouvelle_relance;
    }

    public function setNouvelleRelance(\DateTimeInterface $nouvelle_relance): self
    {
        $this->nouvelle_relance = $nouvelle_relance;

        return $this;
    }

    public function getApporteurAffaireAff(): ?int
    {
        return $this->apporteur_affaire_aff;
    }

    public function setApporteurAffaireAff(int $apporteur_affaire_aff): self
    {
        $this->apporteur_affaire_aff = $apporteur_affaire_aff;

        return $this;
    }

    public function getMessageAlerteAff(): ?bool
    {
        return $this->message_alerte_aff;
    }

    public function setMessageAlerteAff(bool $message_alerte_aff): self
    {
        $this->message_alerte_aff = $message_alerte_aff;

        return $this;
    }

    public function getAlerteAff(): ?bool
    {
        return $this->alerte_aff;
    }

    public function setAlerteAff(bool $alerte_aff): self
    {
        $this->alerte_aff = $alerte_aff;

        return $this;
    }

    public function getNePasAfficherAlerteAff(): ?bool
    {
        return $this->ne_pas_afficher_alerte_aff;
    }

    public function setNePasAfficherAlerteAff(bool $ne_pas_afficher_alerte_aff): self
    {
        $this->ne_pas_afficher_alerte_aff = $ne_pas_afficher_alerte_aff;

        return $this;
    }
}
