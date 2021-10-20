<?php
class Beanie
{
    const SIZES = ['S', 'M', 'L'];
    const MATERIALS = ['Wool', 'Organic Wool', 'Cashemere'];

    protected string $name;
    protected int $price;
    protected string $description;
    protected string $size;
    protected string $material;

    public function __construct()
    {
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

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize($size): Beanie
    {
        $this->size = $size;
        return $this;
    }

    public  function getMaterial(): string
    {
        return $this->material;
    }

    public function setMaterial($material): Beanie
    {
        $this->material = $material;
        return $this;
    }
}
