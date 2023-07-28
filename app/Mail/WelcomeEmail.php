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
    private $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, string $url)
    {
        $this->user = $user;
        $this->url  = $url;
    }

    public function build(){
        $email = $this->subject('SMEZONE NEW REGISTRATION')->view('emails.welcome')->with(['user' => $this->user, 'url' => $this->url]);
        return $email;
    }
}
