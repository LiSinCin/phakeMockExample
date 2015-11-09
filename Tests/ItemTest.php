<?php
namespace Acme\phpVerTest\Tests;

class ItemTest extends \PHPUnit_Framework_TestCase
{

    function testPhakeMockCreation()
    {
        $item = \Phake::partialMock('Item');
        \Phake::when($item)->methodToMock()->thenReturn(100);
        $this->assertInstanceOf('\Item', $item);
        $this->assertEquals(100, $item->methodToExecute());
    }
}
