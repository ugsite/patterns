<?php declare(strict_types=1);

spl_autoload_register(static function ($class_name) {
  if (file_exists($class_name . '.php')) {
    require_once $class_name . '.php';
  } else {
    require_once "../lab1/" . $class_name . '.php';
  }
});

// Build a colour scene.
$colourObjectsFactory = new ColourObjectsFactory();
$colourObjectsFactory->createCircle(1, 2, 3);
$colourObjectsFactory->createPoint(4, 5);
$colourObjectsFactory->createLine(1, 1, 2, 2);
$colourObjectsFactory->createTriangle(1, 1, 2, 2, 3, 3);

Scene::getInstance()->add(new FillDecorator(false, new Circle(true, 1, 2, 3)));
Scene::getInstance()->draw();
