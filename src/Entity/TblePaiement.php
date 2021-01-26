<?php

namespace App\Entity;

use App\Repository\TblePaiementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TblePaiementRepository::class)
 */
class TblePaiement
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
    private $proprietaire_pnt;

    /**
     * @ORM\ManyToOne(targetEntity=TbleCommandeClt::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_commande_pnt;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $type_paiement_pnt;

    /**
     * @ORM\Column(type="date")
     */
    private $date_paiement;

    /**
     * @ORM\Column(type="float")
     */
    private $montant_percu_pnt;

    /**
     * @ORM\ManyToOne(targetEntity=TbleModePaiement::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mode_paiement_pnt;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_piece_pnt;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $banque_emetrice_pnt;

    /**
     * @ORM\Column(type="date")
     */
    private $echeance_pnt;

    /**
     * @ORM\Column(type="float")
     */
    private $rest_a_percevoir_pnt;

    /**
     * @ORM\Column(type="date")
     */
    private $echeance_reste_pnt;

    /**
     * @ORM\Column(type="float")
     */
    private $rendre;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_paid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProprietairePnt(): ?int
    {
        return $this->proprietaire_pnt;
    }

    public function setProprietairePnt(int $proprietaire_pnt): self
    {
        $this->proprietaire_pnt = $proprietaire_pnt;

        return $this;
    }

    public function getIdCommandePnt(): ?int
    {
        return $this->id_commande_pnt;
    }

    public function setIdCommandePnt(int $id_commande_pnt): self
    {
        $this->id_commande_pnt = $id_commande_pnt;

        return $this;
    }

    public function getTypePaiementPnt(): ?string
    {
        return $this->type_paiement_pnt;
    }

    public function setTypePaiementPnt(string $type_paiement_pnt): self
    {
        $this->type_paiement_pnt = $type_paiement_pnt;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->date_paiement;
    }

    public function setDatePaiement(\DateTimeInterface $date_paiement): self
    {
        $this->date_paiement = $date_paiement;

        return $this;
    }

    public function getMontantPercuPnt(): ?float
    {
        return $this->montant_percu_pnt;
    }

    public function setMontantPercuPnt(float $montant_percu_pnt): self
    {
        $this->montant_percu_pnt = $montant_percu_pnt;

        return $this;
    }

    public function getModePaiementPnt(): ?int
    {
        return $this->mode_paiement_pnt;
    }

    public function setModePaiementPnt(int $mode_paiement_pnt): self
    {
        $this->mode_paiement_pnt = $mode_paiement_pnt;

        return $this;
    }

    public function getNumPiecePnt(): ?int
    {
        return $this->num_piece_pnt;
    }

    public function setNumPiecePnt(int $num_piece_pnt): self
    {
        $this->num_piece_pnt = $num_piece_pnt;

        return $this;
    }

    public function getBanqueEmetricePnt(): ?string
    {
        return $this->banque_emetrice_pnt;
    }

    public function setBanqueEmetricePnt(string $banque_emetrice_pnt): self
    {
        $this->banque_emetrice_pnt = $banque_emetrice_pnt;

        return $this;
    }

    public function getEcheancePnt(): ?\DateTimeInterface
    {
        return $this->echeance_pnt;
    }

    public function setEcheancePnt(\DateTimeInterface $echeance_pnt): self
    {
        $this->echeance_pnt = $echeance_pnt;

        return $this;
    }

    public function getRestAPercevoirPnt(): ?float
    {
        return $this->rest_a_percevoir_pnt;
    }

    public function setRestAPercevoirPnt(float $rest_a_percevoir_pnt): self
    {
        $this->rest_a_percevoir_pnt = $rest_a_percevoir_pnt;

        return $this;
    }

    public function getEcheanceRestePnt(): ?\DateTimeInterface
    {
        return $this->echeance_reste_pnt;
    }

    public function setEcheanceRestePnt(\DateTimeInterface $echeance_reste_pnt): self
    {
        $this->echeance_reste_pnt = $echeance_reste_pnt;

        return $this;
    }

    public function getRendre(): ?float
    {
        return $this->rendre;
    }

    public function setRendre(float $rendre): self
    {
        $this->rendre = $rendre;

        return $this;
    }

    public function getIsPaid(): ?bool
    {
        return $this->is_paid;
    }

    public function setIsPaid(bool $is_paid): self
    {
        $this->is_paid = $is_paid;

        return $this;
    }
}
