<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Registration;

class EmailAgain extends Mailable
{
    use Queueable, SerializesModels;
    
    
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
        //return $this->markdown('emails.register');

        return $this->from('badsaarow@sausekrause.de')
                ->markdown('emails.register');
    }
}
