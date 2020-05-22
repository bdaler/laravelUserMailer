# laravelUserMailer
Library allowing Users to send email with their own SMTP settings in Laravel
* install via composer:
```composer require bdaler/usermailer```

* simple usage: 
```
    $credentials = new UserMailCredentials();
    $credentials
        ->setMailerName('smtp')
        ->setFromEmail('example@yandex.ru')
        ->setFromName('example')
        ->setSmtpHost('smtp.yandex.ru')
        ->setSmtpPort('587')
        ->setSmtpUserName('example@yandex.ru')
        ->setSmtpPassword('emailPassword')
        ->setSmtpEncryption('tls');

    $mailer = (new UserMailer())->getMailer($credentials);
    $mailer->to('example@outlook.com')->send(new SomeMailable());
```
