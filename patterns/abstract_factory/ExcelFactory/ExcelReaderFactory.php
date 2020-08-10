<?php

namespace abstract_factory\ExcelFactory;

use abstract_factory\Excel2007\Excel2007Reader;
use abstract_factory\Excel5\Excel5Reader;

/**
 * 試算表取讀器工廠 (實體工廠)
 */
class ExcelReaderFactory implements ExcelFactory
{
    public function Excel5()
    {
        return new Excel5Reader();
    }

    public function Excel2007()
    {
        return new Excel2007Reader();
    }
}
