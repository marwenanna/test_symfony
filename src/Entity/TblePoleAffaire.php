<?php

namespace App\Entity;

use App\Repository\TblePoleAffaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TblePoleAffaireRepository::class)
 */
class TblePoleAffaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleAffaire::class, mappedBy="pole_affaire")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $pole;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }


    public function getPole(): ?string
    {
        return $this->pole;
    }

    public function setPole(string $pole): self
    {
        $this->pole = $pole;

        return $this;
    }
}
