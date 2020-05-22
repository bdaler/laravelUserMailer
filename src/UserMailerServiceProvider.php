<?php

namespace Bdaler\UserMailer;

use Illuminate\Mail\Mailer;
use Illuminate\Support\ServiceProvider;
use Swift_Mailer;
use Swift_SmtpTransport;

class UserMailerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('user.mailer', function ($app, array $parameters) {
            $mailerName = $parameters['mailerName'];
            $smtpHost = $parameters['smtpHost'];
            $smtpPort = $parameters['smtpPort'];
            $smtpUserName = $parameters['smtpUserName'];
            $smtpPassword = $parameters['smtpPassword'];
            $smtpEncryption = $parameters['smtpEncryption'];

            $fromEmail = $parameters['fromEmail'];
            $fromName = $parameters['fromName'];

            $transport = new Swift_SmtpTransport($smtpHost, $smtpPort);
            $transport->setUsername($smtpUserName);
            $transport->setPassword($smtpPassword);
            $transport->setEncryption($smtpEncryption);

            $swiftMailer = new Swift_Mailer($transport);

            $mailer = new Mailer($mailerName, $app->get('view'), $swiftMailer, $app->get('events'));
            $mailer->alwaysFrom($fromEmail, $fromName);
            $mailer->alwaysReplyTo($fromEmail, $fromName);

            return $mailer;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
