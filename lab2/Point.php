<?php declare(strict_types=1);

/**
 * Point
 */
class Point extends SimpleShape
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
    parent::__construct($isColour);

    $this->coordX = $coordX;
    $this->coordY = $coordY;
  }

  public function draw(): void
  {
    printf(
      "%s point with coordinates: x: %f, y: %f\n",
      $this->isColour ? 'Colour' : 'Not colour',
      $this->coordX,
      $this->coordY,
    );
  }

  public function clone(): self
  {
    return new self($this->isColour, $this->coordX, $this->coordY);
  }
}
