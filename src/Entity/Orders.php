<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrdersRepository")
 */
class Orders
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $market_place;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_flux;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $order_refid;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $order_mrid;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $order_amount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarketPlace(): ?string
    {
        return $this->market_place;
    }

    public function setMarketPlace(string $market_place): self
    {
        $this->market_place = $market_place;

        return $this;
    }

    public function getIdFlux(): ?int
    {
        return $this->id_flux;
    }

    public function setIdFlux(int $id_flux): self
    {
        $this->id_flux = $id_flux;

        return $this;
    }

    public function getOrderRefid(): ?int
    {
        return $this->order_refid;
    }

    public function setOrderRefid(int $order_refid): self
    {
        $this->order_refid = $order_refid;

        return $this;
    }

    public function getOrderMrid(): ?int
    {
        return $this->order_mrid;
    }

    public function setOrderMrid(int $order_mrid): self
    {
        $this->order_mrid = $order_mrid;

        return $this;
    }

    public function getOrderAmount(): ?float
    {
        return $this->order_amount;
    }

    public function setOrderAmount(float $order_amount): self
    {
        $this->order_amount = $order_amount;

        return $this;
    }
}
