<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\tim;

class confirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $tim;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(tim $tim)
    {
        $this->tim=$tim;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("No-Reply@beacon.petra.ac.id","Beacon 2021")->subject("Do Not Reply This Email")->view("mailer.confirmationMail");
    }
}
