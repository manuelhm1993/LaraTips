<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade as PDF;//Clase que permite usar las herramientas PDF

use App\User;

class UserController extends Controller
{
    public function exportPDF()
    {
        $users = User::all();
        $pdf   = PDF::loadView('pdf.users', compact('users'));

        //El parámetro que recibe es el nombre que tendrá el documento
        return $pdf->download('user-list.pdf');
    }
}
