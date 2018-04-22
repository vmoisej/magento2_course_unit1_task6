<?php

namespace Training\Test2\Model;

use Training\Test\Model\ConfigDepsInterface;

class Service
{
    protected $configDeps;
    protected $string;
    protected $dataArray;

    public function __construct(
        ConfigDepsInterface $configDeps,
        $string,
        $dataArray
    ) {
        $this->configDeps = $configDeps;
        $this->string = $string;
        $this->dataArray = $dataArray;
    }

    public function log()
    {
        echo '<br/>';
        echo get_class($this->configDeps).'<br/>';
        echo $this->string.'<br/>';
        print_r($this->dataArray);
    }
}
