<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The User instance.
     *
     * @var User
     */
    private $user;
    private $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, string $code)
    {
        $this->user = $user;
        $this->code  = $code;
    }

    public function build(){
        $email = $this->subject('SMEZONE NEW REGISTRATION')->view('emails.welcome')->with(['user' => $this->user, 'code' => $this->code]);
        return $email;
    }
}
