<?php

namespace Internship\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="Internship\Repository\ContactRepository")
 */
class Contact
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
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=40)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=30)
     */
    private $subject;
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535)
     *
     */
    private $message;

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
    public function getName(): string
    {
        return $this->name ? $this->name : '';
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email ? $this->email : '';
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject ? $this->subject : '';
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message ? $this->message : '';
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}
