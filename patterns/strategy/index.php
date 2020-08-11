<?php

require __DIR__ . '../../autoload.php';

use strategy\Traveler;
use strategy\TransportByBus;
use strategy\TransportByTrain;

$takeBusStrategy = new TransportByBus();
$takeTrainStrategy = new TransportByTrain();

$busTraveler = new Traveler('阿里巴巴', $takeBusStrategy);
$trainTraveler = new Traveler('動力火車', $takeTrainStrategy);

$busTraveler->travelTo('台北');
$trainTraveler->travelTo('台北');
/**
 * results:
 *
 * 阿里巴巴 選擇 搭巴士 去 台北
 * 動力火車 選擇 搭火車 去 台北
 */
?>
<pre>
    Strategy 或稱 "策略模式"

    定義一系列的演算法，把它們一個個封裝起來，並且使它們可相互替換。
    概念上來看，這些演算法完成的都是相同的工作，只是實作不同
</pre>

<a href="https://www.notion.so/Strategy-15218afb7e1a4e6082e8253cc1bd2bd9" target="_blank">
    更多…
</a>