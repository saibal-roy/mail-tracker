<?php

namespace jdavidbakr\MailTracker\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use jdavidbakr\MailTracker\Model\SentEmail;

class ViewEmailEvent implements ShouldQueue
{
    use SerializesModels;

    public $sent_email;
    public $ip_address;
    public $user_agent;
    /**
     * Create a new event instance.
     *
     * @param  sent_email  $sent_email
     * @return void
     */
    public function __construct(SentEmail $sent_email, $ip_address, $user_agent)
    {
        $this->sent_email = $sent_email;
        $this->ip_address = $ip_address;
        $this->user_agent = $user_agent;
    }
}
