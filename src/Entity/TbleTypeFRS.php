<?php

namespace App\Entity;

use App\Repository\TbleTypeFRSRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleTypeFRSRepository::class)
 */
class TbleTypeFRS
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleFournisseur::class, mappedBy="type_fournisseur")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $type_frs;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    public function getTypeFrs(): ?string
    {
        return $this->type_frs;
    }

    public function setTypeFrs(string $type_frs): self
    {
        $this->type_frs = $type_frs;

        return $this;
    }
}
