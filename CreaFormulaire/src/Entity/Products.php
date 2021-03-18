<?php

namespace App\Entity;

use App\Repository\ProductsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductsRepository::class)
 */
class Products
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $ProductName;

    /**
     * @ORM\Column(type="integer")
     */
    private $CategoryID;

    /**
     * @ORM\Column(type="integer")
     */
    private $QuantityPerUnit;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $UnitPrice;

    /**
     * @ORM\Column(type="integer")
     */
    private $UnitsInStock;

    /**
     * @ORM\Column(type="integer")
     */
    private $UnitsOnOrder;

    /**
     * @ORM\Column(type="integer")
     */
    private $ReorderLevel;

    /**
     * @ORM\Column(type="integer")
     */
    private $Discontinued;

    /**
     * @ORM\ManyToOne(targetEntity=suppliers::class, inversedBy="products")
     */
    private $SupplierID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->ProductName;
    }

    public function setProductName(string $ProductName): self
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    public function getCategoryID(): ?int
    {
        return $this->CategoryID;
    }

    public function setCategoryID(int $CategoryID): self
    {
        $this->CategoryID = $CategoryID;

        return $this;
    }

    public function getQuantityPerUnit(): ?int
    {
        return $this->QuantityPerUnit;
    }

    public function setQuantityPerUnit(int $QuantityPerUnit): self
    {
        $this->QuantityPerUnit = $QuantityPerUnit;

        return $this;
    }

    public function getUnitPrice(): ?string
    {
        return $this->UnitPrice;
    }

    public function setUnitPrice(string $UnitPrice): self
    {
        $this->UnitPrice = $UnitPrice;

        return $this;
    }

    public function getUnitsInStock(): ?int
    {
        return $this->UnitsInStock;
    }

    public function setUnitsInStock(int $UnitsInStock): self
    {
        $this->UnitsInStock = $UnitsInStock;

        return $this;
    }

    public function getUnitsOnOrder(): ?int
    {
        return $this->UnitsOnOrder;
    }

    public function setUnitsOnOrder(int $UnitsOnOrder): self
    {
        $this->UnitsOnOrder = $UnitsOnOrder;

        return $this;
    }

    public function getReorderLevel(): ?int
    {
        return $this->ReorderLevel;
    }

    public function setReorderLevel(int $ReorderLevel): self
    {
        $this->ReorderLevel = $ReorderLevel;

        return $this;
    }

    public function getDiscontinued(): ?int
    {
        return $this->Discontinued;
    }

    public function setDiscontinued(int $Discontinued): self
    {
        $this->Discontinued = $Discontinued;

        return $this;
    }

    public function getSupplierID(): ?suppliers
    {
        return $this->SupplierID;
    }

    public function setSupplierID(?suppliers $SupplierID): self
    {
        $this->SupplierID = $SupplierID;

        return $this;
    }



}
