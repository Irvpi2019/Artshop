<?php

namespace App\Entity;

use App\Repository\StylesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StylesRepository::class)
 */
class Styles
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
    private $nameStyle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeStyle;

    /**
     * @ORM\Column(type="integer")
     */
    private $categoryId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameStyle(): ?string
    {
        return $this->nameStyle;
    }

    public function setNameStyle(string $nameStyle): self
    {
        $this->nameStyle = $nameStyle;

        return $this;
    }

    public function getCodeStyle(): ?string
    {
        return $this->codeStyle;
    }

    public function setCodeStyle(string $codeStyle): self
    {
        $this->codeStyle = $codeStyle;

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
