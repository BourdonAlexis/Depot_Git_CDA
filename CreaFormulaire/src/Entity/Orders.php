<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
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
    private $EmployyeID;

    /**
     * @ORM\Column(type="datetime")
     */
    private $OrderDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $RequiredDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ShippiedDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $ShipVia;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $freight;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $shipname;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $shipadress;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $shipcity;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $shipregion;

    /**
     * @ORM\Column(type="integer")
     */
    private $shipcodepostal;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $shipcountry;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployyeID(): ?int
    {
        return $this->EmployyeID;
    }

    public function setEmployyeID(int $EmployyeID): self
    {
        $this->EmployyeID = $EmployyeID;

        return $this;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->OrderDate;
    }

    public function setOrderDate(\DateTimeInterface $OrderDate): self
    {
        $this->OrderDate = $OrderDate;

        return $this;
    }

    public function getRequiredDate(): ?\DateTimeInterface
    {
        return $this->RequiredDate;
    }

    public function setRequiredDate(\DateTimeInterface $RequiredDate): self
    {
        $this->RequiredDate = $RequiredDate;

        return $this;
    }

    public function getShippiedDate(): ?\DateTimeInterface
    {
        return $this->ShippiedDate;
    }

    public function setShippiedDate(\DateTimeInterface $ShippiedDate): self
    {
        $this->ShippiedDate = $ShippiedDate;

        return $this;
    }

    public function getShipVia(): ?int
    {
        return $this->ShipVia;
    }

    public function setShipVia(int $ShipVia): self
    {
        $this->ShipVia = $ShipVia;

        return $this;
    }

    public function getFreight(): ?string
    {
        return $this->freight;
    }

    public function setFreight(string $freight): self
    {
        $this->freight = $freight;

        return $this;
    }

    public function getShipname(): ?string
    {
        return $this->shipname;
    }

    public function setShipname(string $shipname): self
    {
        $this->shipname = $shipname;

        return $this;
    }

    public function getShipadress(): ?string
    {
        return $this->shipadress;
    }

    public function setShipadress(string $shipadress): self
    {
        $this->shipadress = $shipadress;

        return $this;
    }

    public function getShipcity(): ?string
    {
        return $this->shipcity;
    }

    public function setShipcity(string $shipcity): self
    {
        $this->shipcity = $shipcity;

        return $this;
    }

    public function getShipregion(): ?string
    {
        return $this->shipregion;
    }

    public function setShipregion(?string $shipregion): self
    {
        $this->shipregion = $shipregion;

        return $this;
    }

    public function getShipcodepostal(): ?int
    {
        return $this->shipcodepostal;
    }

    public function setShipcodepostal(int $shipcodepostal): self
    {
        $this->shipcodepostal = $shipcodepostal;

        return $this;
    }

    public function getShipcountry(): ?string
    {
        return $this->shipcountry;
    }

    public function setShipcountry(string $shipcountry): self
    {
        $this->shipcountry = $shipcountry;

        return $this;
    }
}
