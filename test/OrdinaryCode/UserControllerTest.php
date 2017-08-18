<?php
namespace test\OrdinaryCode;

use OrdinaryCode\UserFactory as UserFactory;

class UserControllerTest extends \PHPUnit_Framework_TestCase
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

    public function testLogin()
    {
        $this->assertInstanceOf('\Models\User', UserFactory::getUserForEmail('known@email.com'));
        $this->assertNull(UserFactory::getUserForId('unknown@email.com'));
    }

}