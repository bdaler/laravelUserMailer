<?php
/**
 * @author Daler Bahritdinov <dbahritdinov@htc-cs.ru>
 * Date: 22.05.2020
 * Time: 12:46
 */

namespace Bdaler\UserMailer\Service;


use Bdaler\UserMailer\UserMailCredentials;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UserMailerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $configuration;
    public $to;
    public $mailable;

    /**
     * Create a new job instance.
     *
     * @param UserMailCredentials $credentials
     * @param string $to
     * @param Mailable $mailable
     */
    public function __construct(UserMailCredentials $credentials, string $to, Mailable $mailable)
    {
        $this->configuration = $credentials;
        $this->to = $to;
        $this->mailable = $mailable;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailer = app()->makeWith('user.mailer', $this->configuration->toArray());
        $mailer->to($this->to)->send($this->mailable);
    }
}
