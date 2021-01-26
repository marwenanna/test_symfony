<?php

namespace App\Entity;

use App\Repository\TbleTypeOperationInventaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleTypeOperationInventaireRepository::class)
 */
class TbleTypeOperationInventaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity=TbleOperationInventaire::class, mappedBy="transaction_type")
     */
    private $id;


    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_action_inventaire;

    public function getTypeActionInventaire(): ?string
    {
        return $this->type_action_inventaire;
    }

    public function setTypeActionInventaire(string $type_action_inventaire): self
    {
        $this->type_action_inventaire = $type_action_inventaire;

        return $this;
    }
}
