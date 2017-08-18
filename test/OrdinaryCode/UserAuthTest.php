<?php

namespace test\OrdinaryCode;

use OrdinaryCode\UserAuth as UserAuth;

class UserAuthTest extends \PHPUnit_Framework_TestCase
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

    public function testVerifyPassword()
    {
        $userAuth = new UserAuth();

        $user = new \Models\User();
        $user->setEmail('good.guy@email.com');

        $this->assertTrue($userAuth->verifyPassword($user, '12345678'));
        $this->assertFalse($userAuth->verifyPassword($user, 'password'));
    }
}
