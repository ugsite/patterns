<?php declare(strict_types=1);

/**
 * Scene
 */
class Scene
{
  private array $graphObjects;
  private static ?Scene $_instance = null;

  public static function getInstance(): self
  {
    if (self::$_instance === null) {
      self::$_instance = new Scene();
    }

    return self::$_instance;
  }

  private function __construct()
  {
    $this->graphObjects = [];
  }

  public function add(GraphObject $graphObject)
  {
    $this->graphObjects[] = $graphObject;
  }

  public function draw(): self
  {
    /** @var GraphObject $graphObject */
    foreach ($this->graphObjects as $graphObject) {
      $graphObject->draw();

      echo PHP_EOL;
    }

    return $this;
  }

  public function clear()
  {
    $this->graphObjects = [];
  }
}
