<?php

namespace abstract_factory\MacbookAir;

abstract class MacAir
{
    public $type = "macbook Air";
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
