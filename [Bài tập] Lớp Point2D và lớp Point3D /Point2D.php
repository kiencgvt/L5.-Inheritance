<?php


class Point2D
{
    protected $x;
    protected $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString(): string
    {
        return "X = " . $this->x . "<br/>" . "y = " . $this->y . "<br/>";
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float $x
     */
    public function setX(float $x): void
    {
        $this->x = $x;
    }

    /**
     * @param float $y
     */
    public function setY(float $y): void
    {
        $this->y = $y;
    }

    public function setXY(float $x, float $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY(): array
    {
        $arr = [];
        array_push($arr, $this->x, $this->y);
        return $arr;
    }
}