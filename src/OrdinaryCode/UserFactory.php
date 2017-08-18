<?php
/**
 * Exceptional Code
 *
 * @copyright  2017 Simon Lewis
 */
namespace OrdinaryCode;
use \Models\User as User;
/**
 * User Factory
 *
 * @author Simon Lewis
 */
class UserFactory
{

    /**
     * Returns a User object for a given id
     *
     * @param integer $userId The unique id of the user
     *
     * @return \Models\User
     */
    public static function getUserForId($userId)
    {
        if ($userId === 1) {
            // get the user from somewhere
            return new User();
        }
        return null;
    }

    public static function getUserForEmail($email)
    {
        if ($email === 'known@email.com') {
            // get the user from somewhere
            return new User();
        }
        return null;
    }
}
