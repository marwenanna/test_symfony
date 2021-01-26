<?php

namespace App\Entity;

use App\Repository\TbleProspectClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=TbleProspectClientRepository::class)
 */
class TbleProspectClient
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=75 , nullable=true )
     */
    private $nom_client;



    /**
     * @ORM\OneToMany(targetEntity=Phonenumber::class, mappedBy="client", orphanRemoval=true)
     */
    private $phonenumbers;

    
    /**
     * @ORM\OneToMany(targetEntity=Adresse::class, mappedBy="client", orphanRemoval=true)
     */
    private $adresses;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nature_client;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $raison_sociale_client;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $matricul_fiscal_client;

    /**
     * @ORM\Column(type="string", length=255 , nullable = true)
     */
    private $genre_client;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom_client;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $email_client;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $site_web;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_ajout_client;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $nat;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $for_sorting;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $nom_complet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $poste_client;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $notes_client;

    /**
     * @ORM\ManyToOne(targetEntity=TbleStatutContact::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=true)
     */
    private $statut_client;

    /**
     * @ORM\ManyToOne(targetEntity=TbleProduit::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=true)
     */
    private $interesse_par;

    

    /**
     * @ORM\Column(type="string", length=30 , nullable = true)
     */
    private $origine;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $recommander_par;

    
    

    public function __construct()
    {
        $this->phonenumbers = new ArrayCollection();
        $this->adresses = new ArrayCollection();
        
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomClient(): ?string
    {
        return $this->nom_client;
    }

    public function setNomClient(string $nom_client): self
    {
        $this->nom_client = $nom_client;

        return $this;
    }

    /**
     * @return Collection|Phonenumber[]
     */
    public function getPhonenumbers(): Collection
    {
        return $this->phonenumbers;
    }

    

    public function addPhonenumber(Phonenumber $phonenumber): self
    {
        if (!$this->phonenumbers->contains($phonenumber)) {
            $this->phonenumbers[] = $phonenumber;
            $phonenumber->setClient($this);
        }

        return $this;
    }

   

    public function removePhonenumber(Phonenumber $phonenumber): self
    {
        if ($this->phonenumbers->contains($phonenumber)) {
            $this->phonenumbers->removeElement($phonenumber);
            // set the owning side to null (unless already changed)
            if ($phonenumber->getClient() === $this) {
                $phonenumber->setClient(null);
            }
        }

        return $this;
    }

    

    public function getNatureClient(): ?string
    {
        return $this->nature_client;
    }

    public function setNatureClient(?string $nature_client): self
    {
        $this->nature_client = $nature_client;

        return $this;
    }

    public function getRaisonSocialeClient(): ?string
    {
        return $this->raison_sociale_client;
    }

    public function setRaisonSocialeClient(?string $raison_sociale_client): self
    {
        $this->raison_sociale_client = $raison_sociale_client;

        return $this;
    }

    public function getMatriculFiscalClient(): ?string
    {
        return $this->matricul_fiscal_client;
    }

    public function setMatriculFiscalClient(?string $matricul_fiscal_client): self
    {
        $this->matricul_fiscal_client = $matricul_fiscal_client;

        return $this;
    }

    public function getGenreClient(): ?string
    {
        return $this->genre_client;
    }

    public function setGenreClient(string $genre_client): self
    {
        $this->genre_client = $genre_client;

        return $this;
    }

    public function getPrenomClient(): ?string
    {
        return $this->prenom_client;
    }

    public function setPrenomClient(?string $prenom_client): self
    {
        $this->prenom_client = $prenom_client;

        return $this;
    }

    public function getEmailClient(): ?string
    {
        return $this->email_client;
    }

    public function setEmailClient(?string $email_client): self
    {
        $this->email_client = $email_client;

        return $this;
    }

    public function getSiteWeb(): ?string
    {
        return $this->site_web;
    }

    public function setSiteWeb(?string $site_web): self
    {
        $this->site_web = $site_web;

        return $this;
    }

    public function getDateAjoutClient(): ?\DateTimeInterface
    {
        return $this->date_ajout_client;
    }

    public function setDateAjoutClient(?\DateTimeInterface $date_ajout_client): self
    {
        $this->date_ajout_client = $date_ajout_client;

        return $this;
    }

    public function getNat(): ?string
    {
        return $this->nat;
    }

    public function setNat(?string $nat): self
    {
        $this->nat = $nat;

        return $this;
    }

    public function getForSorting(): ?string
    {
        return $this->for_sorting;
    }

    public function setForSorting(?string $for_sorting): self
    {
        $this->for_sorting = $for_sorting;

        return $this;
    }

    public function getNomComplet(): ?string
    {
        return $this->nom_complet;
    }

    public function setNomComplet(?string $nom_complet): self
    {
        $this->nom_complet = $nom_complet;

        return $this;
    }

    /**
     * @return Collection|Adresse[]
     */
    public function getAdresses(): Collection
    {
        return $this->adresses;
    }

    public function addAdress(Adresse $adress): self
    {
        if (!$this->adresses->contains($adress)) {
            $this->adresses[] = $adress;
            $adress->setClient($this);
        }

        return $this;
    }

    public function removeAdress(Adresse $adress): self
    {
        if ($this->adresses->contains($adress)) {
            $this->adresses->removeElement($adress);
            // set the owning side to null (unless already changed)
            if ($adress->getClient() === $this) {
                $adress->setClient(null);
            }
        }

        return $this;
    }

    public function getPosteClient(): ?string
    {
        return $this->poste_client;
    }

    public function setPosteClient(?string $poste_client): self
    {
        $this->poste_client = $poste_client;

        return $this;
    }

    public function getNotesClient(): ?string
    {
        return $this->notes_client;
    }

    public function setNotesClient(?string $notes_client): self
    {
        $this->notes_client = $notes_client;

        return $this;
    }

    public function getStatutClient(): ?TbleStatutContact
    {
        return $this->statut_client;
    }

    public function setStatutClient(TbleStatutContact $statut_client): self
    {
        $this->statut_client = $statut_client;

        return $this;
    }

    public function getInteressePar(): ?TbleProduit
    {
        return $this->interesse_par;
    }

    public function setInteressePar(TbleProduit $interesse_par): self
    {
        $this->interesse_par = $interesse_par;

        return $this;
    }

    

    

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(string $origine): self
    {
        $this->origine = $origine;

        return $this;
    }

    public function getRecommanderPar(): ?string
    {
        return $this->recommander_par;
    }

    public function setRecommanderPar(?string $recommander_par): self
    {
        $this->recommander_par = $recommander_par;

        return $this;
    }

    
}
