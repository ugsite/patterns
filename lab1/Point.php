<?php declare(strict_types=1);

/**
 * Point
 */
class Point extends GraphObject
{
  private float $coordX;
  private float $coordY;

  /**
   * @param bool  $isColour
   * @param float $coordX
   * @param float $coordY
   */
  public function __construct(bool $isColour, float $coordX, float $coordY)
  {
    $this->isColour = $isColour;
    $this->coordX = $coordX;
    $this->coordY = $coordY;
  }

  public function draw(): void
  {
    printf(
      "%s point with coordinates: x: %f, y: %f",
      $this->isColour ? 'Colour' : 'Not colour',
      $this->coordX,
      $this->coordY,
    );
  }

  public function clone(): self
  {
    return new self($this->isColour, $this->coordX, $this->coordY);
  }

  /**
   * @return float
   */
  public function getCoordX(): float
  {
    return $this->coordX;
  }

  /**
   * @return float
   */
  public function getCoordY(): float
  {
    return $this->coordY;
  }
}
