<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BachRepository")
 */
class Bach
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emotion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $negative;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $positive;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmotion(): ?string
    {
        return $this->emotion;
    }

    public function setEmotion(string $emotion): self
    {
        $this->emotion = $emotion;

        return $this;
    }

    public function getNegative(): ?string
    {
        return $this->negative;
    }

    public function setNegative(string $negative): self
    {
        $this->negative = $negative;

        return $this;
    }

    public function getPositive(): ?string
    {
        return $this->positive;
    }

    public function setPositive(string $positive): self
    {
        $this->positive = $positive;

        return $this;
    }
}
