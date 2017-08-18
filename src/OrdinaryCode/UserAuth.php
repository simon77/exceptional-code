<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace OrdinaryCode;

/**
 * Description of UserAuth
 *
 * @author simon
 */
class UserAuth
{
    public function verifyPassword(\Models\User $user, $password)
    {
        if ($password == $this->getPasswordForUser($user)) {
            return true;
        }
        return false;
    }

    private function getPasswordForUser(\Models\User $user)
    {
        if ($user->getEmail() == 'good.guy@email.com') {
            $password = '12345678';
            return $password;
        }

        if ($user->getEmail() == 'bad.guy@email.com') {
            $password = null;
            return $password;
        }

        return null;

    }
}
