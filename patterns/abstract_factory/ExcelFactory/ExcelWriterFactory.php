<?php

namespace abstract_factory\ExcelFactory;

use abstract_factory\Excel2007\Excel2007Writer;
use abstract_factory\Excel5\Excel5Writer;

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
