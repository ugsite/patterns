<?php declare(strict_types=1);

/**
 * SceneBuilder interface
 */
interface SceneBuilder
{
  public function addLine(float $x1, float $y1, float $x2, float $y2): self;

  public function addCircle(float $x1, float $x2, float $radius): self;

  public function addPoint(float $x1, float $x2): self;

  public function reset(): void;
}
