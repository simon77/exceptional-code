<?php

namespace test\ExceptionalCode\Exceptions;

use ExceptionalCode\Exceptions\User as User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @return void
     */
//    protected function setUp()
//    {
//        $this->markTestIncomplete('This test has not been implemented yet. Credentials file issues');
//        $this->object = new Logger($this->config);
//    }

    public function testUserException()
    {
        $exception = new User();
        $this->assertInstanceOf('\ExceptionalCode\Exceptions\User', $exception);

    }

}