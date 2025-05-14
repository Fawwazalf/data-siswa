<?php

namespace App\Jobs;

use App\Mail\TestMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class ProcessTestMail implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(protected $user) {}


    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Process the test mail
        // For example, send the email using a Mailable class
        Mail::to($this->user['email'])->send(new TestMail($this->user));
    }
}
