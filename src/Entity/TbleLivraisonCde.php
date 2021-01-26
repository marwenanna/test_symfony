<?php

namespace App\Entity;

use App\Repository\TbleLivraisonCdeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleLivraisonCdeRepository::class)
 */
class TbleLivraisonCde
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=TbleCommandeClt::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_commande_livraison;

    /**
     * @ORM\Column(type="date")
     */
    private $date_livraison;

    /**
     * @ORM\Column(type="text")
     */
    private $adresse_livraison;

    /**
     * @ORM\ManyToOne(targetEntity=TbleGovernorat::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $governorat_livraison;

    /**
     * @ORM\Column(type="text")
     */
    private $a_livrer_par;

    /**
     * @ORM\Column(type="text")
     */
    private $suivi_livraison;

    /**
     * @ORM\Column(type="float")
     */
    private $montant_facture_livraison;

    /**
     * @ORM\ManyToOne(targetEntity=TbleTransporteur::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $transporteur_livraison;

    /**
     * @ORM\Column(type="float")
     */
    private $charges_payees_livraison;

    /**
     * @ORM\Column(type="boolean")
     */
    private $livree;

    /**
     * @ORM\Column(type="boolean")
     */
    private $facturee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCommandeLivraison(): ?int
    {
        return $this->id_commande_livraison;
    }

    public function setIdCommandeLivraison(int $id_commande_livraison): self
    {
        $this->id_commande_livraison = $id_commande_livraison;

        return $this;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->date_livraison;
    }

    public function setDateLivraison(\DateTimeInterface $date_livraison): self
    {
        $this->date_livraison = $date_livraison;

        return $this;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->adresse_livraison;
    }

    public function setAdresseLivraison(string $adresse_livraison): self
    {
        $this->adresse_livraison = $adresse_livraison;

        return $this;
    }

    public function getGovernoratLivraison(): ?int
    {
        return $this->governorat_livraison;
    }

    public function setGovernoratLivraison(int $governorat_livraison): self
    {
        $this->governorat_livraison = $governorat_livraison;

        return $this;
    }

    public function getALivrerPar(): ?string
    {
        return $this->a_livrer_par;
    }

    public function setALivrerPar(string $a_livrer_par): self
    {
        $this->a_livrer_par = $a_livrer_par;

        return $this;
    }

    public function getSuiviLivraison(): ?string
    {
        return $this->suivi_livraison;
    }

    public function setSuiviLivraison(string $suivi_livraison): self
    {
        $this->suivi_livraison = $suivi_livraison;

        return $this;
    }

    public function getMontantFactureLivraison(): ?float
    {
        return $this->montant_facture_livraison;
    }

    public function setMontantFactureLivraison(float $montant_facture_livraison): self
    {
        $this->montant_facture_livraison = $montant_facture_livraison;

        return $this;
    }

    public function getTransporteurLivraison(): ?int
    {
        return $this->transporteur_livraison;
    }

    public function setTransporteurLivraison(int $transporteur_livraison): self
    {
        $this->transporteur_livraison = $transporteur_livraison;

        return $this;
    }

    public function getChargesPayeesLivraison(): ?float
    {
        return $this->charges_payees_livraison;
    }

    public function setChargesPayeesLivraison(float $charges_payees_livraison): self
    {
        $this->charges_payees_livraison = $charges_payees_livraison;

        return $this;
    }

    public function getLivree(): ?bool
    {
        return $this->livree;
    }

    public function setLivree(bool $livree): self
    {
        $this->livree = $livree;

        return $this;
    }

    public function getFacturee(): ?bool
    {
        return $this->facturee;
    }

    public function setFacturee(bool $facturee): self
    {
        $this->facturee = $facturee;

        return $this;
    }
}
