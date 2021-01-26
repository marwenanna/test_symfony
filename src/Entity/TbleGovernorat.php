<?php

namespace App\Entity;

use App\Repository\TbleGovernoratRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleGovernoratRepository::class)
 */
class TbleGovernorat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleLivraisonCde::class, mappedBy="governorat_livraison")
     * @ORM\OneToMany(targetEntity=TbleSettings::class, mappedBy="gouvernorat_notre_societe")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $governorat;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    public function getGovernorat(): ?string
    {
        return $this->governorat;
    }

    public function setGovernorat(string $governorat): self
    {
        $this->governorat = $governorat;

        return $this;
    }
}
