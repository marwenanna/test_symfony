<?php

namespace App\Entity;

use App\Repository\TbleSousCategoriePdtRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleSousCategoriePdtRepository::class)
 */
class TbleSousCategoriePdt
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleProduit::class, mappedBy="sous_category_produit")
     */
    private $id;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    /**
     * @return Collection|TbleProduit[]
     */
    public function getId(): Collection
    {
        return $this->id;
    }

    public function addId(TbleProduit $id): self
    {
        if (!$this->id->contains($id)) {
            $this->id[] = $id;
            $id->setSousCategoryProduit($this);
        }

        return $this;
    }

    public function removeId(TbleProduit $id): self
    {
        if ($this->id->contains($id)) {
            $this->id->removeElement($id);
            // set the owning side to null (unless already changed)
            if ($id->getSousCategoryProduit() === $this) {
                $id->setSousCategoryProduit(null);
            }
        }

        return $this;
    }



   /**
     * @ORM\Column(type="string", length=20)
     */
    private $sous_categorie;


    public function getSousCategorie(): ?string
    {
        return $this->sous_categorie;
    }

    public function setSousCategorie(string $sous_categorie): self
    {
        $this->sous_categorie = $sous_categorie;

        return $this;
    }
}
