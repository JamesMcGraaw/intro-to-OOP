<?php

// A class is the specification/description/blueprint of objects
// It's a kind of data type.

class Pig
{
    // const is public by default. if it needs to be private use private const
    const OWNER = 'Farmer Bob';
    // Properties
    private string $name;
    public float $weight;
    public string $colour;

    /**
     * @return string
     */
    public function getScientificName(): string
    {
        return $this->scientificName;
    }
    private string $scientificName = 'Sus';

    // Methods

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getColour(): string
    {
        return $this->colour;
    }

    /**
     * @param string $colour
     */
    public function setColour(string $colour): void
    {
        $this->colour = $colour;
    }



    public function speak(): string
    {
        return 'Oink!';
    }

    public function wagTail(): string
    {
        return 'Wag, waf!';
    }

    public function eat(string $food): string
    {
        return 'Mmmm. I love tasty ' . $food;
    }
}