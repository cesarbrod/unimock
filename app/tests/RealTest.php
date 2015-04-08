<?php

class RealTest extends PHPUnit_Framework_TestCase {
    public function setUp() {
                
    }
    
    public function testReal() {
        $mock = Mockery::mock('Real');
        $mock->shouldReceive('run')->once()->andReturn('really mocked');
        
        var_dump($mock->run());
        
    }
}