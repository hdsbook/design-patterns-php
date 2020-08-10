<?php

namespace abstract_factory\MacbookPro;

abstract class MacPro
{
    public $type = "macbook Pro";
    public $ssdSpace;

    public function setSsdSpace(int $ssdSpace)
    {
        $this->ssdSpace = $ssdSpace;
    }

    public function showSpecInfo()
    {
        echo "型號：{$this->type}<br>";
        echo "SSD：{$this->ssdSpace}G<br>";
        echo "----------------------------<br>";
    }
}
