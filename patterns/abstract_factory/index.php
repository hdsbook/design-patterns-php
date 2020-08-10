<?php

use abstract_factory\Mac256Factory;
use abstract_factory\Mac512Factory;

require __DIR__ . '../../autoload.php';

$factory512 = new Mac512Factory();
$factory256 = new Mac256Factory();

$macAir512 = $factory512->produceMacAir();
$macPro512 = $factory512->produceMacPro();
$macAir256 = $factory256->produceMacAir();
$macPro256 = $factory256->produceMacPro();

$macAir512->showSpecInfo();
$macPro512->showSpecInfo();
$macAir256->showSpecInfo();
$macPro256->showSpecInfo();

$type = 'pro';
$ssd = 512;
$macFactory = ($ssd == 512) ?
    new Mac512Factory() : new Mac256Factory();
$newMac = ($type == 'pro') ?
    $macFactory->produceMacPro() : $macFactory->produceMacAir();
$newMac->showSpecInfo();

?>
<pre>
    Abstract Factory 或稱 "抽象工廠模式"

    上例若單純以 switch 實踐，可能要寫為：
    $mac = null;
    switch ($type) {
        case 'macbook pro':
            $mac = ($ssdSpace == 512) ?
                new MacPro512() :
                new MacPro256();
            break;
        case 'macbook air':
            $mac = ($ssdSpace == 512) ?
                new MacAir512() :
                new MacAir256();
            break;
    }
    或許上例程式碼看上去精簡許多，不用再製造那麼多的 class
    但是 選擇型號 與 選擇SSD規格 的程式已經耦合在一起了
</pre>

<a href="https://www.notion.so/Newpattern-15218afb7e1a4e6082e8253cc1bd2bd9" target="_blank">更多…</a>