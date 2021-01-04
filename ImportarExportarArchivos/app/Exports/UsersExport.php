<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //Puede ser cualquier consulta
        //return User::select('id', 'name', 'email')->get();
        return User::all();
    }
}
