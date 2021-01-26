<?php

namespace App\Entity;

use App\Repository\PhonenumberRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhonenumberRepository::class)
 */
class Phonenumber
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

   

    /**
     * @ORM\ManyToOne(targetEntity=TbleProspectClient::class, inversedBy="phonenumbers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\Column(type="string", length=25 , nullable=true)
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function __construct($number=null)
    {
        if (!is_null($number)) {

            $this->number = $number;
        }
    }

    public function setPhonenumber($number)
    {
        $this->number = $number;
    }

    
}
