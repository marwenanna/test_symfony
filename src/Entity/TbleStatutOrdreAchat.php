<?php

namespace App\Entity;

use App\Repository\TbleStatutOrdreAchatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleStatutOrdreAchatRepository::class)
 */
class TbleStatutOrdreAchat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleOrdreAchat::class, mappedBy="status_OA_ID")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut_OA;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    public function getStatutOA(): ?string
    {
        return $this->statut_OA;
    }

    public function setStatutOA(string $statut_OA): self
    {
        $this->statut_OA = $statut_OA;

        return $this;
    }
}
