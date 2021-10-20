<?php
class Beanie
{
    const SIZES = ['S', 'M', 'L'];
    const MATERIALS = ['Wool', 'Organic Wool', 'Cashemere'];

    protected string $name;
    protected int $price;
    protected string $description;
    protected array $sizes;
    protected array $materials;

    public function __construct()
    {
        $this->sizes = [];
        $this->materials = [];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): Beanie
    {
        $this->name = $name;
        return $this;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice($price): Beanie
    {
        $this->price = $price;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription($description): Beanie
    {
        $this->description = $description;
        return $this;
    }

    public function getSizes(): array
    {
        return $this->sizes;
    }

    public function setSizes($sizes): Beanie
    {
        $this->sizes = $sizes;
        return $this;
    }

    public function addSize($size): Beanie
    {
        $this->sizes[] = $size;
        return $this;
    }

    public  function getMaterials(): array
    {
        return $this->materials;
    }

    public function setMaterials($materials): Beanie
    {
        $this->materials = $materials;
        return $this;
    }

    public function addMaterial($material): Beanie
    {
        $this->materials[] = $material;
        return $this;
    }
}
