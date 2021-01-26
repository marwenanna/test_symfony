<?php

namespace App\Entity;

use App\Repository\TbleOperationInventaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbleOperationInventaireRepository::class)
 */
class TbleOperationInventaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=TbleTypeOperationInventaire::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $transaction_type;

    /**
     * @ORM\Column(type="date")
     */
    private $transaction_created_date;

    /**
     * @ORM\Column(type="date")
     */
    private $transaction_modified_date;

    /**
     * @ORM\ManyToOne(targetEntity=TbleProduit::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product_id;

    /**
     * @ORM\Column(type="float")
     */
    private $quantity;

    /**
     * @ORM\Column(type="integer")
     */
    private $ordre_achat_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_detail_oa;

    /**
     * @ORM\ManyToOne(targetEntity=TbleCommandeClt::class, inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commande_client_id;

    /**
     * @ORM\Column(type="text")
     */
    private $comments;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_detail_cde;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTransactionType(): ?int
    {
        return $this->transaction_type;
    }

    public function setTransactionType(int $transaction_type): self
    {
        $this->transaction_type = $transaction_type;

        return $this;
    }

    public function getTransactionCreatedDate(): ?\DateTimeInterface
    {
        return $this->transaction_created_date;
    }

    public function setTransactionCreatedDate(\DateTimeInterface $transaction_created_date): self
    {
        $this->transaction_created_date = $transaction_created_date;

        return $this;
    }

    public function getTransactionModifiedDate(): ?\DateTimeInterface
    {
        return $this->transaction_modified_date;
    }

    public function setTransactionModifiedDate(\DateTimeInterface $transaction_modified_date): self
    {
        $this->transaction_modified_date = $transaction_modified_date;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->product_id;
    }

    public function setProductId(int $product_id): self
    {
        $this->product_id = $product_id;

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getOrdreAchatId(): ?int
    {
        return $this->ordre_achat_id;
    }

    public function setOrdreAchatId(int $ordre_achat_id): self
    {
        $this->ordre_achat_id = $ordre_achat_id;

        return $this;
    }

    public function getIdDetailOa(): ?int
    {
        return $this->id_detail_oa;
    }

    public function setIdDetailOa(int $id_detail_oa): self
    {
        $this->id_detail_oa = $id_detail_oa;

        return $this;
    }

    public function getCommandeClientId(): ?int
    {
        return $this->commande_client_id;
    }

    public function setCommandeClientId(int $commande_client_id): self
    {
        $this->commande_client_id = $commande_client_id;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getIdDetailCde(): ?int
    {
        return $this->id_detail_cde;
    }

    public function setIdDetailCde(int $id_detail_cde): self
    {
        $this->id_detail_cde = $id_detail_cde;

        return $this;
    }
}
