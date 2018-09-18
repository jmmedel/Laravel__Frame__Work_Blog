<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailPurchase extends Mailable
{
    use Queueable, SerializesModels;

    public $paymenInfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   // form is main url page
        return $this
        ->form('http://localhost')
        ->view('email.purchase');
    }
}
