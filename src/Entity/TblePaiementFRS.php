<?php

namespace App\Entity;

use App\Repository\TblePaiementFRSRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TblePaiementFRSRepository::class)
 */
class TblePaiementFRS
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
    private $proprietaire_paiement_OA_frs;

    /**
     * @ORM\ManyToOne(targetEntity=TbleOrdreAchat::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_OA_frs;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $type_paiement_OA_frs;

    /**
     * @ORM\Column(type="date")
     */
    private $date_paiement_OA_frs;

    /**
     * @ORM\Column(type="float")
     */
    private $montant_paye_pnt_OA_frs;

    /**
     * @ORM\Column(type="integer")
     */
    private $mode_paiement_pnt_OA_frs;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_piece_pnt_OA_frs;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $banque_emetrice_pnt_OA_frs;

    /**
     * @ORM\Column(type="date")
     */
    private $echeance_pnt_OA_frs;

    /**
     * @ORM\Column(type="float")
     */
    private $rest_a_payer_pnt_OA_frs;

    /**
     * @ORM\Column(type="date")
     */
    private $echeance_reste_pnt_OA_frs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProprietairePaiementOAFrs(): ?int
    {
        return $this->proprietaire_paiement_OA_frs;
    }

    public function setProprietairePaiementOAFrs(int $proprietaire_paiement_OA_frs): self
    {
        $this->proprietaire_paiement_OA_frs = $proprietaire_paiement_OA_frs;

        return $this;
    }

    public function getIdOAFrs(): ?int
    {
        return $this->id_OA_frs;
    }

    public function setIdOAFrs(int $id_OA_frs): self
    {
        $this->id_OA_frs = $id_OA_frs;

        return $this;
    }

    public function getTypePaiementOAFrs(): ?string
    {
        return $this->type_paiement_OA_frs;
    }

    public function setTypePaiementOAFrs(string $type_paiement_OA_frs): self
    {
        $this->type_paiement_OA_frs = $type_paiement_OA_frs;

        return $this;
    }

    public function getDatePaiementOAFrs(): ?\DateTimeInterface
    {
        return $this->date_paiement_OA_frs;
    }

    public function setDatePaiementOAFrs(\DateTimeInterface $date_paiement_OA_frs): self
    {
        $this->date_paiement_OA_frs = $date_paiement_OA_frs;

        return $this;
    }

    public function getMontantPayePntOAFrs(): ?float
    {
        return $this->montant_paye_pnt_OA_frs;
    }

    public function setMontantPayePntOAFrs(float $montant_paye_pnt_OA_frs): self
    {
        $this->montant_paye_pnt_OA_frs = $montant_paye_pnt_OA_frs;

        return $this;
    }

    public function getModePaiementPntOAFrs(): ?int
    {
        return $this->mode_paiement_pnt_OA_frs;
    }

    public function setModePaiementPntOAFrs(int $mode_paiement_pnt_OA_frs): self
    {
        $this->mode_paiement_pnt_OA_frs = $mode_paiement_pnt_OA_frs;

        return $this;
    }

    public function getNumPiecePntOAFrs(): ?int
    {
        return $this->num_piece_pnt_OA_frs;
    }

    public function setNumPiecePntOAFrs(int $num_piece_pnt_OA_frs): self
    {
        $this->num_piece_pnt_OA_frs = $num_piece_pnt_OA_frs;

        return $this;
    }

    public function getBanqueEmetricePntOAFrs(): ?string
    {
        return $this->banque_emetrice_pnt_OA_frs;
    }

    public function setBanqueEmetricePntOAFrs(string $banque_emetrice_pnt_OA_frs): self
    {
        $this->banque_emetrice_pnt_OA_frs = $banque_emetrice_pnt_OA_frs;

        return $this;
    }

    public function getEcheancePntOAFrs(): ?\DateTimeInterface
    {
        return $this->echeance_pnt_OA_frs;
    }

    public function setEcheancePntOAFrs(\DateTimeInterface $echeance_pnt_OA_frs): self
    {
        $this->echeance_pnt_OA_frs = $echeance_pnt_OA_frs;

        return $this;
    }

    public function getRestAPayerPntOAFrs(): ?float
    {
        return $this->rest_a_payer_pnt_OA_frs;
    }

    public function setRestAPayerPntOAFrs(float $rest_a_payer_pnt_OA_frs): self
    {
        $this->rest_a_payer_pnt_OA_frs = $rest_a_payer_pnt_OA_frs;

        return $this;
    }

    public function getEcheanceRestePntOAFrs(): ?\DateTimeInterface
    {
        return $this->echeance_reste_pnt_OA_frs;
    }

    public function setEcheanceRestePntOAFrs(\DateTimeInterface $echeance_reste_pnt_OA_frs): self
    {
        $this->echeance_reste_pnt_OA_frs = $echeance_reste_pnt_OA_frs;

        return $this;
    }
}
