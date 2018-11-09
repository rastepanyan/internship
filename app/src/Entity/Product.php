<?php

namespace Internship\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="Internship\Repository\ProductRepository")
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=30)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", options={"default"=99999999.99}, precision=10, scale=2)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="short_description", type="text", length=255)
     *
     */
    private $shortDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="full_description", type="text", length=65535)
     */
    private $fullDescription;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date_of_creation", type="datetime")
     */
    private $dateOfCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="images", type="string", length=255)
     */
    private $images;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Orderline", mappedBy="product")
     */
    private $orderline;

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
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title ? $this->title : '';
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price ? $this->price : '';
    }

    /**
     * @param string $price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription ? $this->shortDescription : '';
    }

    /**
     * @param string $shortDescription
     */
    public function setShortDescription(string $shortDescription): void
    {
        $this->shortDescription = $shortDescription;
    }

    /**
     * @return string
     */
    public function getFullDescription(): string
    {
        return $this->fullDescription ? $this->fullDescription : '';
    }

    /**
     * @param string $fullDescription
     */
    public function setFullDescription(string $fullDescription): void
    {
        $this->fullDescription = $fullDescription;
    }

    /**
     * @return DateTime
     */
    public function getDateOfCreation(): DateTime
    {
        return $this->dateOfCreation;
    }

    /**
     * @param DateTime $dateOfCreation
     */
    public function setDateOfCreation(DateTime $dateOfCreation): void
    {
        $this->dateOfCreation = $dateOfCreation;
    }

    /**
     * @return string
     */
    public function getImages(): string
    {
        return $this->images ? $this->images : '';
    }

    /**
     * @param string $images
     */
    public function setImages(string $images): void
    {
        $this->images = $images;
    }

    /**
     * @return ArrayCollection
     */
    public function getOrderline(): ArrayCollection
    {
        return $this->orderline;
    }

    /**
     * @param ArrayCollection $orderline
     */
    public function setOrderline(ArrayCollection $orderline): void
    {
        $this->orderline = $orderline;
    }
}
