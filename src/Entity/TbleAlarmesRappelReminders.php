<?php

namespace App\Entity;

use App\Repository\TbleAlarmesRappelRemindersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleAlarmesRappelRemindersRepository::class)
 */
class TbleAlarmesRappelReminders
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $employer_a_rappeler;

    /**
     * @ORM\Column(type="text")
     */
    private $sujet_rappel;

    /**
     * @ORM\Column(type="text")
     */
    private $description_rappel;

    /**
     * @ORM\Column(type="date")
     */
    private $date_alarme_rappel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $message;

    /**
     * @ORM\Column(type="boolean")
     */
    private $alarme;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ne_pas_afficher;

    /**
     * @ORM\Column(type="text")
     */
    private $commentaires;

    /**
     * @ORM\ManyToOne(targetEntity=TbleAffaire::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $affaire;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $priorite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etat;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut;

    /**
     * @ORM\Column(type="date")
     */
    private $date_due;

    /**
     * @ORM\Column(type="float")
     */
    private $pourcentage_complet;

    /**
     * @ORM\Column(type="boolean")
     */
    private $actif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployerARappeler(): ?int
    {
        return $this->employer_a_rappeler;
    }

    public function setEmployerARappeler(int $employer_a_rappeler): self
    {
        $this->employer_a_rappeler = $employer_a_rappeler;

        return $this;
    }

    public function getSujetRappel(): ?string
    {
        return $this->sujet_rappel;
    }

    public function setSujetRappel(string $sujet_rappel): self
    {
        $this->sujet_rappel = $sujet_rappel;

        return $this;
    }

    public function getDescriptionRappel(): ?string
    {
        return $this->description_rappel;
    }

    public function setDescriptionRappel(string $description_rappel): self
    {
        $this->description_rappel = $description_rappel;

        return $this;
    }

    public function getDateAlarmeRappel(): ?\DateTimeInterface
    {
        return $this->date_alarme_rappel;
    }

    public function setDateAlarmeRappel(\DateTimeInterface $date_alarme_rappel): self
    {
        $this->date_alarme_rappel = $date_alarme_rappel;

        return $this;
    }

    public function getMessage(): ?bool
    {
        return $this->message;
    }

    public function setMessage(bool $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getAlarme(): ?bool
    {
        return $this->alarme;
    }

    public function setAlarme(bool $alarme): self
    {
        $this->alarme = $alarme;

        return $this;
    }

    public function getNePasAfficher(): ?bool
    {
        return $this->ne_pas_afficher;
    }

    public function setNePasAfficher(bool $ne_pas_afficher): self
    {
        $this->ne_pas_afficher = $ne_pas_afficher;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(string $commentaires): self
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    public function getAffaire(): ?int
    {
        return $this->affaire;
    }

    public function setAffaire(int $affaire): self
    {
        $this->affaire = $affaire;

        return $this;
    }

    public function getPriorite(): ?string
    {
        return $this->priorite;
    }

    public function setPriorite(string $priorite): self
    {
        $this->priorite = $priorite;

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

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateDue(): ?\DateTimeInterface
    {
        return $this->date_due;
    }

    public function setDateDue(\DateTimeInterface $date_due): self
    {
        $this->date_due = $date_due;

        return $this;
    }

    public function getPourcentageComplet(): ?float
    {
        return $this->pourcentage_complet;
    }

    public function setPourcentageComplet(float $pourcentage_complet): self
    {
        $this->pourcentage_complet = $pourcentage_complet;

        return $this;
    }

    public function getActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(bool $actif): self
    {
        $this->actif = $actif;

        return $this;
    }
}
