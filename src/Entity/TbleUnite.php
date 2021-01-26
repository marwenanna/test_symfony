<?php

namespace App\Entity;

use App\Repository\TbleUniteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleUniteRepository::class)
 */
class TbleUnite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleProduit::class, mappedBy="unite_produit")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $champ1;
    

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
            $id->setUniteProduit($this);
        }

        return $this;
    }

    public function removeId(TbleProduit $id): self
    {
        if ($this->id->contains($id)) {
            $this->id->removeElement($id);
            // set the owning side to null (unless already changed)
            if ($id->getUniteProduit() === $this) {
                $id->setUniteProduit(null);
            }
        }

        return $this;
    }

    public function getChamp1(): ?string
    {
        return $this->champ1;
    }

    public function setChamp1(string $champ1): self
    {
        $this->champ1 = $champ1;

        return $this;
    }
}
