<?php declare(strict_types=1);

/**
 * TriangleAdapter
 */
class TriangleAdapter extends SimpleShape
{
  private Triangle $adaptee;

  public function __construct(bool $isColour, Triangle $adaptee)
  {
    parent::__construct($isColour);

    $this->adaptee = $adaptee;
  }

  public function draw(): void
  {
    printf(
      "%s triangle with coordinates: x1: %f, y1: %f, x2: %f, y2: %f, x3: %f, y3: %f\n",
      $this->isColour ? 'Colour' : 'Not colour',
      $this->adaptee->x1,
      $this->adaptee->y1,
      $this->adaptee->x2,
      $this->adaptee->y2,
      $this->adaptee->x3,
      $this->adaptee->y3,
    );
  }

  public function clone(): TriangleAdapter
  {
    return new TriangleAdapter($this->isColour, $this->adaptee);
  }
}
