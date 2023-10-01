<?php declare(strict_types=1);

/**
 * MemorySceneBuilder
 */
class MemorySceneBuilder implements SceneBuilder
{
  private float $result = 0;

  public function addLine(float $x1, float $y1, float $x2, float $y2): self
  {
    $this->result += 10;

    return $this;
  }

  public function addCircle(float $x1, float $x2, float $radius): self
  {
    $this->result += 20;

    return $this;
  }

  public function addPoint(float $x1, float $x2): self
  {
    $this->result += 5;

    return $this;
  }

  public function reset(): void
  {
  }

  public function getResult(): float
  {
    return $this->result;
  }
}
