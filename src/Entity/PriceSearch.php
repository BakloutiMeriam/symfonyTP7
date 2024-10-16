<?php

namespace App\Entity;

use App\Repository\PriceSearchRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PriceSearchRepository::class)]
class PriceSearch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $minPrice = null;

    #[ORM\Column]
    private ?float $maxPrice = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMinPrice(): ?float
    {
        return $this->minPrice;
    }

    public function setMinPrice(float $minPrice): static
    {
        $this->minPrice = $minPrice;

        return $this;
    }

    public function getMaxPrice(): ?float
    {
        return $this->maxPrice;
    }

    public function setMaxPrice(float $maxPrice): static
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }
}
