<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade as PDF;//Clase que permite usar las herramientas PDF

use App\User;

use Maatwebsite\Excel\Facades\Excel;//Clase que permite usar las herramientas Excel
use App\Exports\UsersExport;//Clase que exporta usuarios

class UserController extends Controller
{
    public function exportPDF()
    {
        $users = User::all();//Consultar todos los usuarios
        $pdf   = PDF::loadView('pdf.users', compact('users'));//Construir la vista de usuarios

        //El parámetro que recibe es el nombre que tendrá el documento | Descarga la vista
        return $pdf->download('user-list.pdf');
    }

    public function exportEXCEL()
    {
        return Excel::download(new UsersExport, 'user-list.xlsx');
    }
}
