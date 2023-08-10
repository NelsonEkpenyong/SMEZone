<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \App\Models\User|null
    */
    public function model(array $row)
    {
        return new User([
            'first_name'  => $row['first_name'],
            'last_name'   => $row['last_name'],
            'phone'       => $row['phone'],
            'email'       => $row['email'],
            'gender_id'   => strtolower($row['gender']) === 'female' ? 2 : 1,
        ]);
    }
}
