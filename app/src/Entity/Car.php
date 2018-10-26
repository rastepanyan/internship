<?php

namespace Internship\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity(repositoryClass="Internship\Repository\CarRepository")
 */
class Car
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Model
     * @ORM\ManyToOne(targetEntity="Internship\Entity\Model", inversedBy="cars")
     */
    private $model;

    /**
     * @var Make
     * @ORM\ManyToOne(targetEntity="Internship\Entity\Make", inversedBy="cars")
     */
    private $make;

    /**
     * @var string
     * @ORM\Column(name="price", type="decimal", scale=2)
     */
    private $price;

    /**
     * @var int
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var boolean
     * @ORM\Column(name="navigation", type="boolean")
     */
    private $navigation;

    /**
     * @var boolean
     * @ORM\Column(name="promote", type="boolean")
     */
    private $promote;

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @var string
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set make
     *
     * @param string $make
     * @return Car
     */
    public function setMake($make)
    {
        $this->make = $make;

        return $this;
    }

    /**
     * Get make
     *
     * @return string
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Set navigation
     *
     * @param boolean $navigation
     * @return Car
     */
    public function setNavigation($navigation)
    {
        $this->navigation = $navigation;

        return $this;
    }

    /**
     * Get navigation
     *
     * @return boolean
     */
    public function getNavigation()
    {
        return $this->navigation;
    }

    /**
     * Set model
     *
     * @param Model $model
     * @return Car
     */
    public function setModel(Model $model = null)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return bool
     */
    public function isPromote()
    {
        return $this->promote;
    }

    /**
     * @param bool $promote
     */
    public function setPromote($promote)
    {
        $this->promote = $promote;
    }
}
