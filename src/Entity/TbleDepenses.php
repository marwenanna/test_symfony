<?php

namespace App\Entity;

use App\Repository\TbleDepensesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleDepensesRepository::class)
 */
class TbleDepenses
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_depenses;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_depenses;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $titre_depenses;

    /**
     * @ORM\ManyToOne(targetEntity=TbleOrdreAchat::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_bc_depenses;

    /**
     * @ORM\ManyToOne(targetEntity=TbleAffaire::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_affaire_depenses;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resume_depenses;

    /**
     * @ORM\Column(type="float")
     */
    private $momtant_depenses;

    /**
     * @ORM\Column(type="text")
     */
    private $notes_depenses;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $introduite_par;

    /**
     * @ORM\ManyToOne(targetEntity=TbleCommandeClt::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_commande_depenses;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDepenses(): ?\DateTimeInterface
    {
        return $this->date_depenses;
    }

    public function setDateDepenses(\DateTimeInterface $date_depenses): self
    {
        $this->date_depenses = $date_depenses;

        return $this;
    }

    public function getTypeDepenses(): ?string
    {
        return $this->type_depenses;
    }

    public function setTypeDepenses(string $type_depenses): self
    {
        $this->type_depenses = $type_depenses;

        return $this;
    }

    public function getTitreDepenses(): ?string
    {
        return $this->titre_depenses;
    }

    public function setTitreDepenses(string $titre_depenses): self
    {
        $this->titre_depenses = $titre_depenses;

        return $this;
    }

    public function getIdBcDepenses(): ?int
    {
        return $this->id_bc_depenses;
    }

    public function setIdBcDepenses(int $id_bc_depenses): self
    {
        $this->id_bc_depenses = $id_bc_depenses;

        return $this;
    }

    public function getIdAffaireDepenses(): ?int
    {
        return $this->id_affaire_depenses;
    }

    public function setIdAffaireDepenses(int $id_affaire_depenses): self
    {
        $this->id_affaire_depenses = $id_affaire_depenses;

        return $this;
    }

    public function getResumeDepenses(): ?string
    {
        return $this->resume_depenses;
    }

    public function setResumeDepenses(string $resume_depenses): self
    {
        $this->resume_depenses = $resume_depenses;

        return $this;
    }

    public function getMomtantDepenses(): ?float
    {
        return $this->momtant_depenses;
    }

    public function setMomtantDepenses(float $momtant_depenses): self
    {
        $this->momtant_depenses = $momtant_depenses;

        return $this;
    }

    public function getNotesDepenses(): ?string
    {
        return $this->notes_depenses;
    }

    public function setNotesDepenses(string $notes_depenses): self
    {
        $this->notes_depenses = $notes_depenses;

        return $this;
    }

    public function getIntroduitePar(): ?int
    {
        return $this->introduite_par;
    }

    public function setIntroduitePar(int $introduite_par): self
    {
        $this->introduite_par = $introduite_par;

        return $this;
    }

    public function getIdCommandeDepenses(): ?int
    {
        return $this->id_commande_depenses;
    }

    public function setIdCommandeDepenses(int $id_commande_depenses): self
    {
        $this->id_commande_depenses = $id_commande_depenses;

        return $this;
    }
}
