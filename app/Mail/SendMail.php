<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('emailcampaign@mail.com')
            ->view('mailTemplate.mail_1')
            ->subject($this->data['subject'])
            ->with([
                'body' => $this->data['body'],
                'banner' => $this->data['banner'],
                'tag' => $this->data['tag'],
                'name' => $this->data['name'],
                'email' => $this->data['email']
            ]);
    }
}
