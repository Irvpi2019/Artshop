<?php

namespace App\Entity;

use App\Repository\DeliveryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeliveryRepository::class)
 */
class Delivery
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
    private $deliveryBy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeliveryBy(): ?string
    {
        return $this->deliveryBy;
    }

    public function setDeliveryBy(string $deliveryBy): self
    {
        $this->deliveryBy = $deliveryBy;

        return $this;
    }
}
