<?php

namespace App\Entity;

use App\Repository\PaymentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaymentRepository::class)
 */
class Payment
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
    private $namePayment;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamePayment(): ?string
    {
        return $this->namePayment;
    }

    public function setNamePayment(string $namePayment): self
    {
        $this->namePayment = $namePayment;

        return $this;
    }
}
