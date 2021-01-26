<?php

namespace App\Entity;

use App\Repository\TbleCategoriePdtRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleCategoriePdtRepository::class)
 */
class TbleCategoriePdt
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleProduit::class, mappedBy="category_produit")
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
            $id->setCategoryProduit($this);
        }

        return $this;
    }

    public function removeId(TbleProduit $id): self
    {
        if ($this->id->contains($id)) {
            $this->id->removeElement($id);
            // set the owning side to null (unless already changed)
            if ($id->getCategoryProduit() === $this) {
                $id->setCategoryProduit(null);
            }
        }

        return $this;
    }

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $category;

   

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }
}
