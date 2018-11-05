<?php

namespace Internship\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="orderlines")
 * @ORM\Entity(repositoryClass="Internship\Repository\OrderlineRepository")
 */
class Orderline
{
    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="id", type="integer", options={"unsigned"=true})
     */
    private $id;

    /**
     * @var Order
     *
     * @ORM\ManyToOne(targetEntity="Internship\Entity\Order", inversedBy="orderline")
     */
    private $order;

    /**
     * @var string
     *
     * @ORM\Column(name="item_price", type="decimal", options={"default"=99999999.99}, precision=10, scale=2)
     */
    private $itemPrice;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="Internship\Entity\Product", inversedBy="orderline")
     */
    private $product;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="decimal", options={"unsigned"=true, "default"=0})
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", options={"unsigned"=true})
     */
    private $position;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getItemPrice(): string
    {
        return $this->itemPrice;
    }

    /**
     * @param string $itemPrice
     */
    public function setItemPrice(string $itemPrice): void
    {
        $this->itemPrice = $itemPrice;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition(int $position): void
    {
        $this->position = $position;
    }
}
