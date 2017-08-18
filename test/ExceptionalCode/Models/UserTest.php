<?php
namespace test\Models;

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

    public function testUser()
    {
        $user = new \Models\User();
        $this->assertInstanceOf('\Models\User', $user);

    }

}