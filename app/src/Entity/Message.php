<?php

namespace Internship\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="messages")
 * @ORM\Entity(repositoryClass="Internship\Repository\MessageRepository")
 */
class Message
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
     * @ORM\Column(name="from_name", type="string", length=30)
     */
    private $fromName;

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
     * @ORM\Column(name="the_message", type="text", length=255)
     *
     */
    private $theMessage;

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
    public function getFromName(): string
    {
        return $this->fromName;
    }

    /**
     * @param string $fromName
     */
    public function setFromName(string $fromName): void
    {
        $this->fromName = $fromName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
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
        return $this->subject;
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
    public function getTheMessage(): string
    {
        return $this->theMessage;
    }

    /**
     * @param string $theMessage
     */
    public function setTheMessage(string $theMessage): void
    {
        $this->theMessage = $theMessage;
    }
}
