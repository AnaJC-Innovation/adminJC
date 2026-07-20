<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;

class AdministradoresController extends Controller
{
    public function data()
    {
        return response()->json(Administrador::all());
    }
}
