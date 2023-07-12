<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicIpController extends Controller
{
    public function index(Request $request)
    {

        // Obtener la IP pública del cliente
        $publicIp = $request->ip();

        // Pasar los datos a la vista
        return view('welcome', compact('publicIp'));
        
    }
}
