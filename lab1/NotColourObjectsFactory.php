<?php declare(strict_types=1);

/**
 * ColourObjectsFactory
 */
class NotColourObjectsFactory implements ObjectsFactory
{
  public function createLine(float $x1, float $y1, float $x2, float $y2): Line
  {
    $line = new Line(false, $x1, $y1, $x2, $y2);
    Scene::getInstance()->add($line);

    return $line;
  }

  public function createCircle(float $x, float $y, float $radius): Circle
  {
    $circle = new Circle(false, $x, $y, $radius);
    Scene::getInstance()->add($circle);

    return $circle;
  }

  public function createPoint(float $x, float $y): Point
  {
    $point = new Point(false, $x, $y);
    Scene::getInstance()->add($point);

    return $point;
  }
}
