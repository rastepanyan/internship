<?php

namespace Internship\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_creation", type="datetime")
     */
    private $dateOfCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="images", type="string")
     */
    private $images;

    /**
     * @Assert\NotBlank(message="Only JPG, JPEG or PNG files are allowed.")
     * @Assert\File(
     *     maxSize = "4096k",
     *     mimeTypes={"image/jpg", "image/jpeg", "image/png"}
     * )
     */
    private $imageFile;

    /**
     * @var PersistentCollection
     *
     * @ORM\OneToMany(targetEntity="Orderline", mappedBy="product")
     */
    private $orderline;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        $this->dateOfCreation = new \DateTime();
    }

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
     * @return \DateTime
     */
    public function getDateOfCreation(): \DateTime
    {
        return $this->dateOfCreation;
    }

    /**
     * @param \DateTime $dateOfCreation
     */
    public function setDateOfCreation(\DateTime $dateOfCreation): void
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
     * @return PersistentCollection
     */
    public function getOrderline(): PersistentCollection
    {
        return $this->orderline;
    }

    /**
     * @param PersistentCollection $orderline
     */
    public function setOrderline(PersistentCollection $orderline): void
    {
        $this->orderline = $orderline;
    }

    /**
     * @return UploadedFile
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param UploadedFile $imageFile
     */
    public function setImageFile(UploadedFile $imageFile): void
    {
        $this->imageFile = $imageFile;
    }
}
