<?php

require __DIR__ . '../../autoload.php';

use adapter\shape\Ball;
use adapter\shape\Circle;
use adapter\shape\Square;

$circle = new Circle();
$circle->draw();

$square = new Square();
$square->draw();

$ball = new Ball();
$ball->draw();

/**
 * adapter 中文有適配器、改編者、轉接器的意思，或稱 "適配器模式"
 *
 * Adapter 將一個類別的介面轉換成另一個介面。使原本由於介面不相容而不能一起工作的類別可以一起工作。
 *
 * Ball 是 Ball3d 的 adapter
 * Ball3d 衍生自 Shape3dInterface
 * Ball 衍生自 ShapeInterface，讓 Ball3d 可以為 ShapeInterface 所用，並維持 ShapeInterface 的多型
 */
