<?php declare(strict_types=1);

/**
 * ObjectsFactory
 */
interface ObjectsFactory
{
  public function createLine(float $x1, float $y1, float $x2, float $y2): Line;

  public function createCircle(float $x, float $y, float $radius): Circle;

  public function createPoint(float $x, float $y): Point;

  public function createTriangle(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): TriangleAdapter;
}
