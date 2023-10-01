<?php declare(strict_types=1);

/**
 * Circle
 */
class Circle extends GraphObject
{
  private float $centerCoordX;
  private float $centerCoordY;
  private float $radius;

  /**
   * @param bool  $isColour
   * @param float $centerCoordX
   * @param float $centerCoordY
   * @param float $radius
   */
  public function __construct(
    bool $isColour,
    float $centerCoordX,
    float $centerCoordY,
    float $radius,
  ) {
    $this->isColour = $isColour;
    $this->centerCoordX = $centerCoordX;
    $this->centerCoordY = $centerCoordY;
    $this->radius = $radius;
  }

  public function draw(): void
  {
    printf(
      "%s circle with center point coordinates: x: %f, y: %f and radius %f",
      $this->isColour ? 'Colour' : 'Not colour',
      $this->centerCoordX,
      $this->centerCoordY,
      $this->radius,
    );
  }

  public function clone(): self
  {
    return new self(
      $this->isColour,
      $this->centerCoordX,
      $this->centerCoordY,
      $this->radius);
  }
}
