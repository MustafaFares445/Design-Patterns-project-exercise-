<?php

namespace Creational\ProtoType;

use SebastianBergmann\CodeUnit\FileUnit;

abstract class AbstractCarProtoType
{
    protected $model;
    private $flag;

    public function getFlag()
    {
        return $this->flag;
    }

    public function setFlag($flag): void
    {
        $this->flag = $flag;
    }
}