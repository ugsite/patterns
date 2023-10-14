<?php declare(strict_types=1);

/**
 * GraphObject
 */
abstract class GraphObject
{
  protected bool $isColour;

  public function __construct(bool $isColour)
  {
    $this->isColour = $isColour;
  }

  public function isColour(): bool
  {
    return $this->isColour;
  }

  abstract public function draw(): void;

  abstract public function clone(): self;
}
