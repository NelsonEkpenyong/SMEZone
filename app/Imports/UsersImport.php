<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Str;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \App\Models\User|null
    */
    public function model(array $row)
    {
        $user = new User([
            'first_name'              => $row['first_name'],
            'last_name'               => $row['last_name'],
            'phone'                   => $row['phone'],
            'email'                   => $row['email'],
            'gender_id'               => strtolower($row['gender']) === 'female' ? 2 : 1,
            'email_verification_code' => Str::random(40)
        ]);

        $user->save();

        $this->sendNotificationEmail($user);

        return $user;
    }

    private function sendNotificationEmail(User $user)
    {
        Mail::to($user->email)->send(new WelcomeEmail($user, $user->email_verification_code));
    }
 
}
