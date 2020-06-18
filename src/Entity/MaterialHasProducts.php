<?php

namespace App\Entity;

use App\Repository\MaterialHasProductsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MaterialHasProductsRepository::class)
 */
class MaterialHasProducts
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $materialId;

    /**
     * @ORM\Column(type="integer")
     */
    private $productId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    public function setMaterialId(int $materialId): self
    {
        $this->materialId = $materialId;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }
}
