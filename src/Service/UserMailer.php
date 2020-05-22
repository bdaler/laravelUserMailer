<?php
/**
 * @author Daler Bahritdinov <dbahritdinov@htc-cs.ru>
 * Date: 22.05.2020
 * Time: 12:41
 */

namespace Bdaler\UserMailer\Service;


use Bdaler\UserMailer\UserMailCredentials;

/**
 * Class UserMailer
 * @package Bdaler\UserMailer\Service
 */
class UserMailer
{
    /**
     * @param UserMailCredentials $credentials
     * @return mixed
     */
    public function getMailer(UserMailCredentials $credentials)
    {
        return app()->makeWith('user.mailer', $credentials->toArray());
    }
}
