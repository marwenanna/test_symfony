<?php

namespace App\Entity;

use App\Repository\TbleProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleProduitRepository::class)
 */
class TbleProduit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleOperationInventaire::class, mappedBy="product_id")
     * @ORM\OneToMany(targetEntity=TbleProspectClient::class, mappedBy="interesse_par")
     * @ORM\OneToMany(targetEntity=TbleDetailOrdreAchat::class, mappedBy="id_produit")
     * @ORM\OneToMany(targetEntity=TbleDetailCommande::class, mappedBy="id_produit_det")
     */
    private $id;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    



    /**
     * @ORM\ManyToOne(targetEntity=TbleUnite::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $unite_produit;

   

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $reference;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $designation_produit;

    /**
     * @ORM\ManyToOne(targetEntity=TbleCategoriePdt::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category_produit;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_achat_ht_produit;

    /**
     * @ORM\Column(type="float")
     */
    private $taux_marge_produit;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_fournisseurs;

    /**
     * @ORM\ManyToOne(targetEntity=TbleSousCategoriePdt::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sous_category_produit;

    /**
     * @ORM\ManyToOne(targetEntity=TbleLigneDeProduits::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ligne_de_produit;

    /**
     * @ORM\Column(type="float")
     */
    private $frais_achat_HT;

    /**
     * @ORM\Column(type="integer")
     */
    private $TVA_produit;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_vente_HT;

    /**
     * @ORM\Column(type="integer")
     */
    private $plafond_remise_produit;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_vente_net_HT_produit;

    /**
     * @ORM\Column(type="text")
     */
    private $caracteristiques_produit;

    /**
     * @ORM\Column(type="float")
     */
    private $marge_nette_produit;

    /**
     * @ORM\Column(type="float")
     */
    private $taux_de_marque_produit;

    /**
     * @ORM\Column(type="float")
     */
    private $taux_de_marque_reel_produ0;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $emplacement;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $vendeur;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite_en_stock;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite_initiale;

    /**
     * @ORM\Column(type="integer")
     */
    private $niveau_de_reapprovisionnement;

    /**
     * @ORM\Column(type="integer")
     */
    private $niveau_cible;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite_minimum_de_reapprovisionnement;

    /**
     * @ORM\Column(type="boolean")
     */
    private $discontinue;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $dimension;

    /**
     * @ORM\Column(type="integer")
     */
    private $finition;

    /**
     * @ORM\ManyToOne(targetEntity=TbleEmploye::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $introduit_par;




    public function getId(): ?int
    {
        return $this->id;
    }


    public function getUniteProduit(): ?TbleUnite
    {
        return $this->unite_produit;
    }

    public function setUniteProduit(?TbleUnite $unite_produit): self
    {
        $this->unite_produit = $unite_produit;

        return $this;
    }
    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getDesignationProduit(): ?string
    {
        return $this->designation_produit;
    }

    public function setDesignationProduit(string $designation_produit): self
    {
        $this->designation_produit = $designation_produit;

        return $this;
    }

    public function getCategoryProduit(): ?int
    {
        return $this->category_produit;
    }

    public function setCategoryProduit(int $category_produit): self
    {
        $this->category_produit = $category_produit;

        return $this;
    }

    public function getPrixAchatHtProduit(): ?float
    {
        return $this->prix_achat_ht_produit;
    }

    public function setPrixAchatHtProduit(float $prix_achat_ht_produit): self
    {
        $this->prix_achat_ht_produit = $prix_achat_ht_produit;

        return $this;
    }

    public function getTauxMargeProduit(): ?float
    {
        return $this->taux_marge_produit;
    }

    public function setTauxMargeProduit(float $taux_marge_produit): self
    {
        $this->taux_marge_produit = $taux_marge_produit;

        return $this;
    }

    public function getIdFournisseurs(): ?int
    {
        return $this->id_fournisseurs;
    }

    public function setIdFournisseurs(int $id_fournisseurs): self
    {
        $this->id_fournisseurs = $id_fournisseurs;

        return $this;
    }

    public function getSousCategoryProduit(): ?TbleSousCategoriePdt
    {
        return $this->sous_category_produit;
    }

    public function setSousCategoryProduit(TbleSousCategoriePdt $sous_category_produit): self
    {
        $this->sous_category_produit = $sous_category_produit;

        return $this;
    }

    public function getLigneDeProduit(): ?int
    {
        return $this->ligne_de_produit;
    }

    public function setLigneDeProduit(int $ligne_de_produit): self
    {
        $this->ligne_de_produit = $ligne_de_produit;

        return $this;
    }

    public function getFraisAchatHT(): ?float
    {
        return $this->frais_achat_HT;
    }

    public function setFraisAchatHT(float $frais_achat_HT): self
    {
        $this->frais_achat_HT = $frais_achat_HT;

        return $this;
    }

    public function getTVAProduit(): ?int
    {
        return $this->TVA_produit;
    }

    public function setTVAProduit(int $TVA_produit): self
    {
        $this->TVA_produit = $TVA_produit;

        return $this;
    }

    public function getPrixVenteHT(): ?float
    {
        return $this->prix_vente_HT;
    }

    public function setPrixVenteHT(float $prix_vente_HT): self
    {
        $this->prix_vente_HT = $prix_vente_HT;

        return $this;
    }

    public function getPlafondRemiseProduit(): ?int
    {
        return $this->plafond_remise_produit;
    }

    public function setPlafondRemiseProduit(int $plafond_remise_produit): self
    {
        $this->plafond_remise_produit = $plafond_remise_produit;

        return $this;
    }

    public function getPrixVenteNetHTProduit(): ?float
    {
        return $this->prix_vente_net_HT_produit;
    }

    public function setPrixVenteNetHTProduit(float $prix_vente_net_HT_produit): self
    {
        $this->prix_vente_net_HT_produit = $prix_vente_net_HT_produit;

        return $this;
    }

    public function getCaracteristiquesProduit(): ?string
    {
        return $this->caracteristiques_produit;
    }

    public function setCaracteristiquesProduit(string $caracteristiques_produit): self
    {
        $this->caracteristiques_produit = $caracteristiques_produit;

        return $this;
    }

    public function getMargeNetteProduit(): ?float
    {
        return $this->marge_nette_produit;
    }

    public function setMargeNetteProduit(float $marge_nette_produit): self
    {
        $this->marge_nette_produit = $marge_nette_produit;

        return $this;
    }

    public function getTauxDeMarqueProduit(): ?float
    {
        return $this->taux_de_marque_produit;
    }

    public function setTauxDeMarqueProduit(float $taux_de_marque_produit): self
    {
        $this->taux_de_marque_produit = $taux_de_marque_produit;

        return $this;
    }

    public function getTauxDeMarqueReelProdu0(): ?float
    {
        return $this->taux_de_marque_reel_produ0;
    }

    public function setTauxDeMarqueReelProdu0(float $taux_de_marque_reel_produ0): self
    {
        $this->taux_de_marque_reel_produ0 = $taux_de_marque_reel_produ0;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getVendeur(): ?string
    {
        return $this->vendeur;
    }

    public function setVendeur(string $vendeur): self
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    public function getQuantiteEnStock(): ?int
    {
        return $this->quantite_en_stock;
    }

    public function setQuantiteEnStock(int $quantite_en_stock): self
    {
        $this->quantite_en_stock = $quantite_en_stock;

        return $this;
    }

    public function getQuantiteInitiale(): ?int
    {
        return $this->quantite_initiale;
    }

    public function setQuantiteInitiale(int $quantite_initiale): self
    {
        $this->quantite_initiale = $quantite_initiale;

        return $this;
    }

    public function getNiveauDeReapprovisionnement(): ?int
    {
        return $this->niveau_de_reapprovisionnement;
    }

    public function setNiveauDeReapprovisionnement(int $niveau_de_reapprovisionnement): self
    {
        $this->niveau_de_reapprovisionnement = $niveau_de_reapprovisionnement;

        return $this;
    }

    public function getNiveauCible(): ?int
    {
        return $this->niveau_cible;
    }

    public function setNiveauCible(int $niveau_cible): self
    {
        $this->niveau_cible = $niveau_cible;

        return $this;
    }

    public function getQuantiteMinimumDeReapprovisionnement(): ?int
    {
        return $this->quantite_minimum_de_reapprovisionnement;
    }

    public function setQuantiteMinimumDeReapprovisionnement(int $quantite_minimum_de_reapprovisionnement): self
    {
        $this->quantite_minimum_de_reapprovisionnement = $quantite_minimum_de_reapprovisionnement;

        return $this;
    }

    public function getDiscontinue(): ?bool
    {
        return $this->discontinue;
    }

    public function setDiscontinue(bool $discontinue): self
    {
        $this->discontinue = $discontinue;

        return $this;
    }

    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    public function setDimension(string $dimension): self
    {
        $this->dimension = $dimension;

        return $this;
    }

    public function getFinition(): ?int
    {
        return $this->finition;
    }

    public function setFinition(int $finition): self
    {
        $this->finition = $finition;

        return $this;
    }

    public function getIntroduitPar(): ?int
    {
        return $this->introduit_par;
    }

    public function setIntroduitPar(int $introduit_par): self
    {
        $this->introduit_par = $introduit_par;

        return $this;
    }
}
