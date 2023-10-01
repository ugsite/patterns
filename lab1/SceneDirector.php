<?php declare(strict_types=1);

/**
 * SceneDirector
 */
class SceneDirector
{
  public function build(SceneBuilder $builder): void
  {
    $builder
      ->addLine(10, 20, 30, 40)
      ->addCircle(15, 15, 10)
      ->addPoint(25, 25);
  }
}
