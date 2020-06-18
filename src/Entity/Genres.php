<?php

namespace App\Entity;

use App\Repository\GenresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GenresRepository::class)
 */
class Genres
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
    private $nameGenre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeGenre;

    /**
     * @ORM\Column(type="integer")
     */
    private $categoryId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameGenre(): ?string
    {
        return $this->nameGenre;
    }

    public function setNameGenre(string $nameGenre): self
    {
        $this->nameGenre = $nameGenre;

        return $this;
    }

    public function getCodeGenre(): ?string
    {
        return $this->codeGenre;
    }

    public function setCodeGenre(string $codeGenre): self
    {
        $this->codeGenre = $codeGenre;

        return $this;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }
}
