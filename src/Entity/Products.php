<?php

namespace App\Entity;

use App\Repository\ProductsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductsRepository::class)
 */
class Products
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
    private $ProdName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="datetime")
     */
    private $addAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $size;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceArtist;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceSite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $views;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $likes;

    /**
     * @ORM\Column(type="integer")
     */
    private $categoryId;

    /**
     * @ORM\Column(type="integer")
     */
    private $artistId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProdName(): ?string
    {
        return $this->ProdName;
    }

    public function setProdName(string $ProdName): self
    {
        $this->ProdName = $ProdName;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getAddAt(): ?\DateTimeInterface
    {
        return $this->addAt;
    }

    public function setAddAt(\DateTimeInterface $addAt): self
    {
        $this->addAt = $addAt;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPriceArtist(): ?int
    {
        return $this->priceArtist;
    }

    public function setPriceArtist(int $priceArtist): self
    {
        $this->priceArtist = $priceArtist;

        return $this;
    }

    public function getPriceSite(): ?int
    {
        return $this->priceSite;
    }

    public function setPriceSite(int $priceSite): self
    {
        $this->priceSite = $priceSite;

        return $this;
    }

    public function getViews(): ?int
    {
        return $this->views;
    }

    public function setViews(?int $views): self
    {
        $this->views = $views;

        return $this;
    }

    public function getLikes(): ?int
    {
        return $this->likes;
    }

    public function setLikes(?int $likes): self
    {
        $this->likes = $likes;

        return $this;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(?int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getArtistId(): ?int
    {
        return $this->artistId;
    }

    public function setArtistId(int $artistId): self
    {
        $this->artistId = $artistId;

        return $this;
    }
}
