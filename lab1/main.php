<?php declare(strict_types=1);

spl_autoload_register(static function ($class_name) {
  include $class_name . '.php';
});

$sceneDirector = new SceneDirector();

// Build a not colour scene.
$notColourObjectsFactory = new NotColourObjectsFactory();
$realSceneBuilder = new RealSceneBuilder($notColourObjectsFactory);
$sceneDirector->build($realSceneBuilder);
Scene::getInstance()->draw()->clear();

// Build a colour scene.
$colourObjectsFactory = new ColourObjectsFactory();
$realSceneBuilder = new RealSceneBuilder($colourObjectsFactory);
$sceneDirector->build($realSceneBuilder);
Scene::getInstance()->draw()->clear();

// Calculate memory usage.
$memorySceneBuilder = new MemorySceneBuilder();
$sceneDirector->build($memorySceneBuilder);
printf("Memory usage: %f", $memorySceneBuilder->getResult());
