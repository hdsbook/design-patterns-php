<?php

use decorator\StuDecorator\HardWorking;
use decorator\StuDecorator\Lazy;
use decorator\Student;

require __DIR__ . '../../autoload.php';

echo '大雄唸書流程：<br>';
$lazyStu = new Lazy(new Student('大雄'));
$lazyStu->study();
echo '------------<br>';

echo '靜香唸書流程：<br>';
$goodStu = new HardWorking(new Student('靜香'));
$goodStu->study();

?>
<pre>
    Decorator 或稱 "裝飾模式"
</pre>

<a href="https://www.notion.so/Decorator-15218afb7e1a4e6082e8253cc1bd2bd9" target="_blank">更多…</a>