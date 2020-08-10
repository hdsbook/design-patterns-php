<?php

namespace abstractFactory\Excel5;

/**
 * 1993 試算表 writer
 */
class Excel5Writer
{
    private $ext = 'xls';

    public function arrayToExcel($fileName, $data)
    {
        echo "正在寫入 {$fileName}.{$this->ext} …<br>";
    }
}
