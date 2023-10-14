<?php declare(strict_types=1);

/**
 * CompositeShape
 */
class CompositeShape extends GraphObject
{
  /** @var GraphObject[] */
  private array $shapes;

  public function __construct(bool $isColour, array $shapes)
  {
    parent::__construct($isColour);

    $this->shapes = $shapes;
  }

  public function draw(): void
  {
    foreach ($this->shapes as $shape) {
      $shape->draw();
    }
  }

  public function clone(): self
  {
    return new CompositeShape($this->isColour(), $this->shapes);
  }
}
