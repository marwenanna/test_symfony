<?php

namespace App\Entity;

use App\Repository\TbleSettingsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleSettingsRepository::class)
 */
class TbleSettings
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $raison_social_notre_societe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricul_fiscal;

    /**
     * @ORM\Column(type="float")
     */
    private $capital;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tel1;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $tel2;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $site_web;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $afficher_au_demarage;

    /**
     * @ORM\Column(type="integer")
     */
    private $premier_devis_notre_societe;

    /**
     * @ORM\Column(type="integer")
     */
    private $premiere_facture_notre_societe;

    /**
     * @ORM\Column(type="integer")
     */
    private $premier_bl_notre_societe;

    /**
     * @ORM\Column(type="integer")
     */
    private $premiere_commande_notre_societe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $integration_notre_societe;

    /**
     * @ORM\ManyToOne(targetEntity=TbleGovernorat::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gouvernorat_notre_societe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRaisonSocialNotreSociete(): ?string
    {
        return $this->raison_social_notre_societe;
    }

    public function setRaisonSocialNotreSociete(string $raison_social_notre_societe): self
    {
        $this->raison_social_notre_societe = $raison_social_notre_societe;

        return $this;
    }

    public function getMatriculFiscal(): ?string
    {
        return $this->matricul_fiscal;
    }

    public function setMatriculFiscal(string $matricul_fiscal): self
    {
        $this->matricul_fiscal = $matricul_fiscal;

        return $this;
    }

    public function getCapital(): ?float
    {
        return $this->capital;
    }

    public function setCapital(float $capital): self
    {
        $this->capital = $capital;

        return $this;
    }

    public function getTel1(): ?string
    {
        return $this->tel1;
    }

    public function setTel1(string $tel1): self
    {
        $this->tel1 = $tel1;

        return $this;
    }

    public function getTel2(): ?string
    {
        return $this->tel2;
    }

    public function setTel2(string $tel2): self
    {
        $this->tel2 = $tel2;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSiteWeb(): ?string
    {
        return $this->site_web;
    }

    public function setSiteWeb(string $site_web): self
    {
        $this->site_web = $site_web;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getAfficherAuDemarage(): ?bool
    {
        return $this->afficher_au_demarage;
    }

    public function setAfficherAuDemarage(bool $afficher_au_demarage): self
    {
        $this->afficher_au_demarage = $afficher_au_demarage;

        return $this;
    }

    public function getPremierDevisNotreSociete(): ?int
    {
        return $this->premier_devis_notre_societe;
    }

    public function setPremierDevisNotreSociete(int $premier_devis_notre_societe): self
    {
        $this->premier_devis_notre_societe = $premier_devis_notre_societe;

        return $this;
    }

    public function getPremiereFactureNotreSociete(): ?int
    {
        return $this->premiere_facture_notre_societe;
    }

    public function setPremiereFactureNotreSociete(int $premiere_facture_notre_societe): self
    {
        $this->premiere_facture_notre_societe = $premiere_facture_notre_societe;

        return $this;
    }

    public function getPremierBlNotreSociete(): ?int
    {
        return $this->premier_bl_notre_societe;
    }

    public function setPremierBlNotreSociete(int $premier_bl_notre_societe): self
    {
        $this->premier_bl_notre_societe = $premier_bl_notre_societe;

        return $this;
    }

    public function getPremiereCommandeNotreSociete(): ?int
    {
        return $this->premiere_commande_notre_societe;
    }

    public function setPremiereCommandeNotreSociete(int $premiere_commande_notre_societe): self
    {
        $this->premiere_commande_notre_societe = $premiere_commande_notre_societe;

        return $this;
    }

    public function getIntegrationNotreSociete(): ?string
    {
        return $this->integration_notre_societe;
    }

    public function setIntegrationNotreSociete(string $integration_notre_societe): self
    {
        $this->integration_notre_societe = $integration_notre_societe;

        return $this;
    }

    public function getGouvernoratNotreSociete(): ?int
    {
        return $this->gouvernorat_notre_societe;
    }

    public function setGouvernoratNotreSociete(int $gouvernorat_notre_societe): self
    {
        $this->gouvernorat_notre_societe = $gouvernorat_notre_societe;

        return $this;
    }
}
