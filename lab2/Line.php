<?php declare(strict_types=1);

/**
 * Line
 */
class Line extends SimpleShape
{
  private float $startCoordX;
  private float $startCoordY;
  private float $endCoordX;
  private float $endCoordY;

  /**
   * @param bool  $isColour
   * @param float $startCoordX
   * @param float $startCoordY
   * @param float $endCoordX
   * @param float $endCoordY
   */
  public function __construct(
    bool $isColour,
    float $startCoordX,
    float $startCoordY,
    float $endCoordX,
    float $endCoordY,
  ) {
    parent::__construct($isColour);

    $this->startCoordX = $startCoordX;
    $this->startCoordY = $startCoordY;
    $this->endCoordX = $endCoordX;
    $this->endCoordY = $endCoordY;
  }

  public function draw(): void
  {
    printf(
      "%s line with coordinates: start point: x: %f, y: %f, end point: x: %f, y: %f\n",
      $this->isColour ? 'Colour' : 'Not colour',
      $this->startCoordX,
      $this->startCoordY,
      $this->endCoordX,
      $this->endCoordY,
    );
  }

  public function clone(): self
  {
    return new self(
      $this->isColour,
      $this->startCoordX,
      $this->startCoordY,
      $this->endCoordX,
      $this->endCoordY,
    );
  }
}
