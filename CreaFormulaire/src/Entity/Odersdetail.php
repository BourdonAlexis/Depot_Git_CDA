<?php

namespace App\Entity;

use App\Repository\OdersdetailRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OdersdetailRepository::class)
 */
class Odersdetail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $unitprice;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $quantity;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantityyy;

    /**
     * @ORM\Column(type="integer")
     */
    private $discount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUnitprice(): ?int
    {
        return $this->unitprice;
    }

    public function setUnitprice(int $unitprice): self
    {
        $this->unitprice = $unitprice;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getQuantityyy(): ?int
    {
        return $this->quantityyy;
    }

    public function setQuantityyy(int $quantityyy): self
    {
        $this->quantityyy = $quantityyy;

        return $this;
    }

    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    public function setDiscount(int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}
