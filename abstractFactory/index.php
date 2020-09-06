<?php

use abstractFactory\ExcelFactory\ExcelReaderFactory;
use abstractFactory\ExcelFactory\ExcelWriterFactory;

require __DIR__ . '../../autoload.php';

// 要做閱讀
$excelFactory = new ExcelReaderFactory();
$excel5Reader = $excelFactory->Excel5();
$excel2007Reader = $excelFactory->Excel2007();

// 要做寫入
$excelFactory = new ExcelWriterFactory();
$excel5Writer = $excelFactory->Excel5();
$excel2007Writer = $excelFactory->Excel2007();

$excel5Writer->arrayToExcel('舊版檔案', ['一些資料']);
$excel2007Writer->arrayToExcel('新版檔案', ['一些資料']);

$excel5Reader->excelToArray('舊版檔案', ['一些資料']);
$excel2007Reader->excelToArray('新版檔案', ['一些資料']);

/**
 * results:
 *
 * 正在寫入 舊版檔案.xls …
 * 正在寫入 新版檔案.xlsx …
 * 正在讀取 舊版檔案.xls …
 * 正在讀取 新版檔案.xlsx …
 */

?>
<pre>
    Abstract Factory 或稱 "抽象工廠模式"

    上例若單純以 switch 實踐，可能要寫為：
    $excelObj = null;
    switch ($purpose) {
        case 'read':
            $excelObj = ($ext == 'xls') ?
                new Excel5Reader() :
                new Excel2007Reader();
            break;
        case 'write':
            $excelObj = ($ext == 'xls') ?
                new Excel5Writer() :
                new Excel2007Writer();
            break;
    }
    或許上例程式碼看上去精簡許多，不用再製造那麼多的 class
    但是 選擇 讀/寫 與 選擇 新/舊版 的程式已經耦合在一起了
    且未來若要調整選擇的邏輯，則需 "兩頭改"
    並且這樣的寫法等於將選擇的邏輯放到了主程式由主程式負責，降低主程式的可讀性與內聚性

    採用了 abstract factory (ExcelFactory) 後，選擇的實作被抽象化、物件的實體化過程被封裝起來了
    主程式甚至不需要知道自己用的是什麼具體物件，只需要信任並知道如何使用來自抽象工廠生產出來的物件
    物件的實體化過程也交由衍生自抽象工廠的具體工廠 (ExcelReaderFactory、ExcelWriterFactory) 來負責
</pre>

<a href="https://www.notion.so/11-Abstract-Factory-a8866fab16c043c7802b9952d5f44a94" target="_blank">
    更多…
</a>