<?php

namespace abstractFactory\Excel2007;

/**
 * 2007 版試算表 reader
 */
class Excel2007Reader
{
    private $ext = 'xlsx';

    public function excelToArray($fileName)
    {
        echo "正在讀取 {$fileName}.{$this->ext} …<br>";
    }
}
