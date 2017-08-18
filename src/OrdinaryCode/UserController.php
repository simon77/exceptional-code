<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace OrdinaryCode;

/**
 * Description of UserController
 *
 * @author simon
 */
class UserController
{

    public function login($email, $password)
    {
        $user = UserFactory::getUserForEmail($email);

        if ($user instanceof \Models\User) {

            $userAuth = new \OrdinaryCode\UserAuth();

            if ($userAuth->verifyPassword($user, $password)) {
                return true;
            }

        }
    }


}
