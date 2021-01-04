<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //Cada fila del documento Excel estará representada por la variable $row
        return new User([
            'name'     => $row[0],         //A
            'email'    => $row[1],         //B
            'password' => bcrypt($row[2]), //C
        ]);
    }
}
