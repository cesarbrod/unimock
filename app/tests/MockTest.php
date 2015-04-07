<?php

class MockTest extends PHPUnit_Framework_TestCase {
    public function setUp() {
                
    }
    
    public function testMock() {
        $mock = Mockery::mock('Real');
        $mock->shouldReceive('run')->once()->andReturn('mocked');
        
        var_dump($mock->run());
        
    }
}