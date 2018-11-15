<?php

namespace Internship\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

/**
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="Internship\Repository\OrderRepository")
 */
class Order
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
     * @var \DateTime
     *
     * @ORM\Column(name="order_date", type="datetime")
     */
    private $orderDate;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="Internship\Entity\User", inversedBy="order")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", options={"default"=99999999.99}, precision=10, scale=2)
     */
    private $amount;

    /**
     * @var PersistentCollection
     *
     * @ORM\OneToMany(targetEntity="Internship\Entity\Orderline", mappedBy="order")
     */
    private $orderLines;

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
     * @return \DateTime
     */
    public function getOrderDate(): string
    {
        return $this->orderDate->format("Y-m-d");
    }

    /**
     * @param \DateTime $orderDate
     */
    public function setOrderDate(\DateTime $orderDate): void
    {
        $this->orderDate = $orderDate;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return PersistentCollection
     */
    public function getOrderLines(): PersistentCollection
    {
        return $this->orderLines;
    }

    /**
     * @param PersistentCollection $orderLines
     */
    public function setOrderLines(PersistentCollection $orderLines): void
    {
        $this->orderLines = $orderLines;
    }
}
