<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormEmail extends Mailable
{
    use Queueable, SerializesModels;
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
    {
        return $this->from('muhammedalikhamzaev@gmail.com')
                    ->subject('Thanks for information!')
                    ->view('form.mailform')
                    ->with([ 
                       'testVarOne' => '1',
                       'testVarTwo' => '2',
                    ]);
        // return $this->view('view.name');
                         
        
        /*
        [   
            'testVarOne' => '1',
            'testVarTwo' => '2',
        ]
        */
    }
}
