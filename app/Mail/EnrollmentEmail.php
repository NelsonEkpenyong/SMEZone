<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class EnrollmentEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The User instance.
     *
     * @var User
     */
    private $user;

    /**
     * The Course name.
     *
     * @param string
     */
    private $course;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, string $course)
    {
        $this->user   = $user;
        $this->course = $course;
    }

    public function build(){
        $email = $this->subject('COURSE REGISTRATION')->view('emails.course_enrollment')->with(['user' => $this->user, 'course' => $this->course]);
        return $email;
    }


}
