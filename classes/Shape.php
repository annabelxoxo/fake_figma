<?php

// Basisklasse voor alle vormen op het canvas.
// Later kunnen klassen zoals Square of Circle hiervan erven (extends Shape).
class Shape
{
    // protected: niet aanpasbaar van buitenaf, wel bruikbaar in klassen die erven
    protected string $color;
    protected int $x;      // afstand van de linkerrand (linkerbovenhoek)
    protected int $y;      // afstand van de bovenrand (linkerbovenhoek)
    protected int $width;
    protected int $height;

    public function __construct(string $color, int $x, int $y, int $width, int $height)
    {
        $this->color = $color;
        $this->x = $x;
        $this->y = $y;
        $this->width = $width;
        $this->height = $height;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}
