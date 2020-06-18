<?php

namespace App\Entity;

use App\Repository\MaterialsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MaterialsRepository::class)
 */
class Materials
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
    private $nameMaterial;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameMaterial(): ?string
    {
        return $this->nameMaterial;
    }

    public function setNameMaterial(string $nameMaterial): self
    {
        $this->nameMaterial = $nameMaterial;

        return $this;
    }
}
