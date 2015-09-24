<?php

namespace Nickfan\LaraBloom\Tests;

use Bloom;

class ExampleTest extends \PHPUnit_Framework_TestCase
{

    public function testDefault()
    {
        $inst = new Bloom(['entries_max' => 10]);
        $items=['test1','test2','test3'];
        $inst->set($items);
        $this->assertEquals(true,$inst->has('test1'));
    }
}
