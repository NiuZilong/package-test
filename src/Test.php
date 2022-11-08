<?php

namespace Niuzilong\PackageTest;

class Test
{
    public function execute()
    {
        echo 'Arlong的Composer包';
    }

    public function getConfig()
    {
        var_dump(config('test'));
    }
}
