<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $UserName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $UserSurname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Pass;

    /**
     * @ORM\Column(type="datetime")
     */
    private $addUserAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->UserName;
    }

    public function setUserName(string $UserName): self
    {
        $this->UserName = $UserName;

        return $this;
    }

    public function getUserSurname(): ?string
    {
        return $this->UserSurname;
    }

    public function setUserSurname(string $UserSurname): self
    {
        $this->UserSurname = $UserSurname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->Pass;
    }

    public function setPass(string $Pass): self
    {
        $this->Pass = $Pass;

        return $this;
    }

    public function getAddUserAt(): ?\DateTimeInterface
    {
        return $this->addUserAt;
    }

    public function setAddUserAt(\DateTimeInterface $addUserAt): self
    {
        $this->addUserAt = $addUserAt;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }
}
