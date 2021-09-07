<?php

namespace App\Jobs;

use App\Mail\SendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $detail;
    public function __construct($detail)
    {
        $this->detail = $detail;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = [
            'subject' => $this->detail['subject'],
            'body' => $this->detail['body'],
            'tag' => $this->detail['tag'],
            'banner' => $this->detail['banner'],
            'name' => $this->detail['name']
        ];
        $length = count($this->detail['email']);
        for ($i = 0; $i < $length; $i++) {
            // Mail::to($email_list[$i])->send(new SendMail($detail));
            // dispatch(new SendEmailJob($detail));
            // $email = ;
            Mail::to($this->detail['email'][$i])->send(new SendMail($data));
        }
    }
}
