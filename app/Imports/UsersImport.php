<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Auth;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new User([
            'name'     => $row['name'],
            'email'    => $row['email'], 
            'phone'    => $row['phone'], 
            'position'    => $row['position'], 
            'state'    => $row['state'], 
            'city'    => $row['city'], 
            'parroquia'    => $row['parroquia'], 
            'pol_party'    => $row['political_party'], 
            'img_pol_party'    => $row['image_political_party'], 
            'password' => '123123123',
            'role' => 'Candidate',

        ]);
    }
}
