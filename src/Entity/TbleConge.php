<?php

namespace App\Entity;

use App\Repository\TbleCongeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleCongeRepository::class)
 */
class TbleConge
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
    private $id_employe_conge;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $statut_conge;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut_conge;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin_conge;

    /**
     * @ORM\Column(type="text")
     */
    private $notes_conge;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEmployeConge(): ?int
    {
        return $this->id_employe_conge;
    }

    public function setIdEmployeConge(int $id_employe_conge): self
    {
        $this->id_employe_conge = $id_employe_conge;

        return $this;
    }

    public function getStatutConge(): ?string
    {
        return $this->statut_conge;
    }

    public function setStatutConge(string $statut_conge): self
    {
        $this->statut_conge = $statut_conge;

        return $this;
    }

    public function getDateDebutConge(): ?\DateTimeInterface
    {
        return $this->date_debut_conge;
    }

    public function setDateDebutConge(\DateTimeInterface $date_debut_conge): self
    {
        $this->date_debut_conge = $date_debut_conge;

        return $this;
    }

    public function getDateFinConge(): ?\DateTimeInterface
    {
        return $this->date_fin_conge;
    }

    public function setDateFinConge(\DateTimeInterface $date_fin_conge): self
    {
        $this->date_fin_conge = $date_fin_conge;

        return $this;
    }

    public function getNotesConge(): ?string
    {
        return $this->notes_conge;
    }

    public function setNotesConge(string $notes_conge): self
    {
        $this->notes_conge = $notes_conge;

        return $this;
    }
}
