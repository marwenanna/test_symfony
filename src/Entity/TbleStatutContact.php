<?php

namespace App\Entity;

use App\Repository\TbleStatutContactRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleStatutContactRepository::class)
 */
class TbleStatutContact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleProspectClient::class, mappedBy="statut_client")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $statut;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }
}
