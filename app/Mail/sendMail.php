<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $trials;

    /**
     * Create a new message instance.
     *
     * @param $trials
     */
    public function __construct($trials)
    {
        $this->trials = $trials;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('teste@teste.com', 'Currículos')
            ->view('mail.email')
            ->with([
                'trials' => $this->trials,
            ]);
    }
}
