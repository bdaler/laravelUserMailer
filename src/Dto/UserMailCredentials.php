<?php
/**
 * @author Daler Bahritdinov <dbahritdinov@htc-cs.ru>
 * Date: 22.05.2020
 * Time: 15:45
 */

namespace Bdaler\UserMailer;


/**
 * Class UserMailCredentials
 * @package Bdaler\UserMailer
 */
class UserMailCredentials
{
    /**
     * @var string
     */
    private $smtpHost;
    /**
     * @var
     */
    private $smtpPort;
    /**
     * @var string
     */
    private $smtpUserName;
    /**
     * @var string
     */
    private $smtpPassword;
    /**
     * @var string
     */
    private $smtpEncryption;
    /**
     * @var string
     */
    private $mailerName;
    /**
     * @var string
     */
    private $fromEmail;
    /**
     * @var string
     */
    private $fromName;

    /**
     * @return string
     */
    public function getSmtpHost(): string
    {
        return $this->smtpHost;
    }

    /**
     * @param string $smtpHost
     * @return UserMailCredentials
     */
    public function setSmtpHost(string $smtpHost): UserMailCredentials
    {
        $this->smtpHost = $smtpHost;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSmtpPort()
    {
        return $this->smtpPort;
    }

    /**
     * @param mixed $smtpPort
     * @return UserMailCredentials
     */
    public function setSmtpPort($smtpPort)
    {
        $this->smtpPort = $smtpPort;
        return $this;
    }

    /**
     * @return string
     */
    public function getSmtpUserName(): string
    {
        return $this->smtpUserName;
    }

    /**
     * @param string $smtpUserName
     * @return UserMailCredentials
     */
    public function setSmtpUserName(string $smtpUserName): UserMailCredentials
    {
        $this->smtpUserName = $smtpUserName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSmtpPassword(): string
    {
        return $this->smtpPassword;
    }

    /**
     * @param string $smtpPassword
     * @return UserMailCredentials
     */
    public function setSmtpPassword(string $smtpPassword): UserMailCredentials
    {
        $this->smtpPassword = $smtpPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getSmtpEncryption(): string
    {
        return $this->smtpEncryption;
    }

    /**
     * @param string $smtpEncryption
     * @return UserMailCredentials
     */
    public function setSmtpEncryption(string $smtpEncryption): UserMailCredentials
    {
        $this->smtpEncryption = $smtpEncryption;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailerName(): string
    {
        return $this->mailerName;
    }

    /**
     * @param string $mailerName
     * @return UserMailCredentials
     */
    public function setMailerName(string $mailerName): UserMailCredentials
    {
        $this->mailerName = $mailerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromEmail(): string
    {
        return $this->fromEmail;
    }

    /**
     * @param string $fromEmail
     * @return UserMailCredentials
     */
    public function setFromEmail(string $fromEmail): UserMailCredentials
    {
        $this->fromEmail = $fromEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromName(): string
    {
        return $this->fromName;
    }

    /**
     * @param string $fromName
     * @return UserMailCredentials
     */
    public function setFromName(string $fromName): UserMailCredentials
    {
        $this->fromName = $fromName;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
