<?php declare(strict_types=1);

class FillDecorator extends SimpleShape
{
  private SimpleShape $shape;

  public function __construct(bool $isColour, SimpleShape $object)
  {
    parent::__construct($isColour);

    $this->shape = $object;
  }

  public function draw(): void
  {
    $this->shape->draw();

    printf(
      "%s decorator fills %s\n",
      $this->isColour ? 'Colour' : 'Not colour',
      get_class($this->shape),
    );
  }

  public function clone(): FillDecorator
  {
    return new FillDecorator($this->isColour, $this->shape);
  }
}
