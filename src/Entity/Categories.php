<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesRepository::class)
 */
class Categories
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
    private $nameCat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeCat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameCat(): ?string
    {
        return $this->nameCat;
    }

    public function setNameCat(string $nameCat): self
    {
        $this->nameCat = $nameCat;

        return $this;
    }

    public function getCodeCat(): ?string
    {
        return $this->codeCat;
    }

    public function setCodeCat(string $codeCat): self
    {
        $this->codeCat = $codeCat;

        return $this;
    }
}
