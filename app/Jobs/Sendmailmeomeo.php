<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\HelloEmail;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class Sendmailmeomeo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $subject = 'This is email subject';
        $content = 'This is email content';

        $reveiverEmailAddress = "conchomuc1998@gmail.com";
        Mail::to($reveiverEmailAddress)->send(new HelloEmail($subject, $content));
        // Mail::to($reveiverEmailAddress)->send(new OrderShipped());

        if (Mail::failures() != 0) {
            Log::info("Email has been sent successfully.");
        }else
        Log::info("Oops! There was some error sending the email.");
    }
}
