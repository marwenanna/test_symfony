<?php

namespace App\Entity;

use App\Repository\TbleLigneDeProduitsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleLigneDeProduitsRepository::class)
 */
class TbleLigneDeProduits
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleProduit::class, mappedBy="ligne_de_produit")
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
            $id->setLigneDeProduit($this);
        }

        return $this;
    }

    public function removeId(TbleProduit $id): self
    {
        if ($this->id->contains($id)) {
            $this->id->removeElement($id);
            // set the owning side to null (unless already changed)
            if ($id->getLigneDeProduit() === $this) {
                $id->setLigneDeProduit(null);
            }
        }

        return $this;
    }




    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ligne_de_produit;

    

    public function getLigneDeProduit(): ?string
    {
        return $this->ligne_de_produit;
    }

    public function setLigneDeProduit(string $ligne_de_produit): self
    {
        $this->ligne_de_produit = $ligne_de_produit;

        return $this;
    }
}
