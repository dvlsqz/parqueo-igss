<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ParkingLots;

class ParkingLotsController extends Controller
{

    public function getConsulta($placa){
        $carro = ParkingLots::where('placa', $placa)->get();

        $data = [
            'carro' => $carro
        ];

        return view('parqueo.consultas', $data);
    }

}
