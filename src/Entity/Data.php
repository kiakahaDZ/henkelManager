<?php

namespace App\Entity;

use App\Repository\DataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DataRepository::class)
 */
class Data
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $salesmanN;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $salesmanName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $customerN;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $customerName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $invoideId;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $time;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $itemId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $itemName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $qte;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $discount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $net;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSalesmanN(): ?string
    {
        return $this->salesmanN;
    }

    public function setSalesmanN(?string $salesmanN): self
    {
        $this->salesmanN = $salesmanN;

        return $this;
    }

    public function getSalesmanName(): ?string
    {
        return $this->salesmanName;
    }

    public function setSalesmanName(?string $salesmanName): self
    {
        $this->salesmanName = $salesmanName;

        return $this;
    }

    public function getCustomerN(): ?string
    {
        return $this->customerN;
    }

    public function setCustomerN(?string $customerN): self
    {
        $this->customerN = $customerN;

        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    public function setCustomerName(?string $customerName): self
    {
        $this->customerName = $customerName;

        return $this;
    }

    public function getInvoideId(): ?string
    {
        return $this->invoideId;
    }

    public function setInvoideId(?string $invoideId): self
    {
        $this->invoideId = $invoideId;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(?\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;

        return $this;
    }

    public function getItemName(): ?string
    {
        return $this->itemName;
    }

    public function setItemName(?string $itemName): self
    {
        $this->itemName = $itemName;

        return $this;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(?int $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getNet(): ?float
    {
        return $this->net;
    }

    public function setNet(?float $net): self
    {
        $this->net = $net;

        return $this;
    }
}
