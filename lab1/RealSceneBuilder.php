<?php declare(strict_types=1);

/**
 * RealSceneBuilder
 */
class RealSceneBuilder implements SceneBuilder
{
  private ObjectsFactory $factory;

  public function __construct(ObjectsFactory $factory)
  {
    $this->factory = $factory;
  }

  public function addLine(float $x1, float $y1, float $x2, float $y2): self
  {
    $this->factory->createLine($x1, $y1, $x2, $y2);

    return $this;
  }

  public function addCircle(float $x1, float $x2, float $radius): self
  {
    $this->factory->createCircle($x1, $x2, $radius);

    return $this;
  }

  public function addPoint(float $x1, float $x2): self
  {
    $this->factory->createPoint($x1, $x2);

    return $this;
  }

  public function reset(): void
  {
    Scene::getInstance()->clear();
  }
}
