<?php

namespace App\Entity;

use App\Repository\TauxDeCommisionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TauxDeCommisionRepository::class)
 */
class TauxDeCommision
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $taux_de_commision;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTauxDeCommision(): ?int
    {
        return $this->taux_de_commision;
    }

    public function setTauxDeCommision(int $taux_de_commision): self
    {
        $this->taux_de_commision = $taux_de_commision;

        return $this;
    }
}
