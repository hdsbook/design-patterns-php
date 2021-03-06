<?php

namespace abstractFactory\ExcelFactory;

use abstractFactory\Excel2007\Excel2007Writer;
use abstractFactory\Excel5\Excel5Writer;

/**
 * 試算表寫入器工廠 (實體工廠)
 */
class ExcelWriterFactory implements ExcelFactory
{
    public function Excel5()
    {
        return new Excel5Writer();
    }

    public function Excel2007()
    {
        return new Excel2007Writer();
    }
}
