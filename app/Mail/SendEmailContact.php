<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailContact extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
      $this->data = $data;  
    }

    public function build()
    {
        return $this->from($this->data['email'])->subject('O cliente enviou uma mensagem')->view('mail.messageContact')->with('data', $this->data);
    }
}
