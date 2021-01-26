<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdresseRepository::class)
 */
class Adresse
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $adresse_client;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $region_client;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code_postal_client;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pays_client;

    /**
     * @ORM\ManyToOne(targetEntity=TbleProspectClient::class, inversedBy="adresses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresseClient(): ?string
    {
        return $this->adresse_client;
    }

    public function setAdresseClient(?string $adresse_client): self
    {
        $this->adresse_client = $adresse_client;

        return $this;
    }

    public function getRegionClient(): ?string
    {
        return $this->region_client;
    }

    public function setRegionClient(?string $region_client): self
    {
        $this->region_client = $region_client;

        return $this;
    }

    public function getCodePostalClient(): ?string
    {
        return $this->code_postal_client;
    }

    public function setCodePostalClient(?string $code_postal_client): self
    {
        $this->code_postal_client = $code_postal_client;

        return $this;
    }

    public function getPaysClient(): ?string
    {
        return $this->pays_client;
    }

    public function setPaysClient(?string $pays_client): self
    {
        $this->pays_client = $pays_client;

        return $this;
    }

    public function getClient(): ?TbleProspectClient
    {
        return $this->client;
    }

    public function setClient(?TbleProspectClient $client): self
    {
        $this->client = $client;

        return $this;
    }

   
}
