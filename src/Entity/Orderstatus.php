<?php

namespace App\Entity;

use App\Repository\OrderstatusRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderstatusRepository::class)
 */
class Orderstatus
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
    private $nameStatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameStatus(): ?string
    {
        return $this->nameStatus;
    }

    public function setNameStatus(string $nameStatus): self
    {
        $this->nameStatus = $nameStatus;

        return $this;
    }
}
