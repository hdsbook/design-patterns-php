<?php

require __DIR__ . '../../autoload.php';

use facade\Facade;

$facade = new Facade();
$facade->doSomeThing();

/**
 * facade 中文有外表、浮面、表面的意思，或稱 "外觀模式"
 *
 * Facade 模式定義了一個更高層的介面(為子系統中的一組介面定義一個統一介面)，使子系統更容易使用。
 */
