<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productnaam;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $productomschrijving;

    /**
     * @ORM\Column(type="float")
     */
    private $prijs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductnaam(): ?string
    {
        return $this->productnaam;
    }

    public function setProductnaam(string $productnaam): self
    {
        $this->productnaam = $productnaam;

        return $this;
    }

    public function getProductomschrijving(): ?string
    {
        return $this->productomschrijving;
    }

    public function setProductomschrijving(?string $productomschrijving): self
    {
        $this->productomschrijving = $productomschrijving;

        return $this;
    }

    public function getPrijs(): ?float
    {
        return $this->prijs;
    }

    public function setPrijs(float $prijs): self
    {
        $this->prijs = $prijs;

        return $this;
    }
}
