<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Registration;

class RegisterEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $total = 30;
    public $register;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Registration $register)
    {
         
        $this->register = $register;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $subject = 'Krytonite Found';

        return $this->view('emails.email')
                    ->subject($subject);
                    
    }
}
