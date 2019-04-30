<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeria;

class GaleriaController extends Controller
{
    public function create(Request $request){
        $galeria = new Galeria();
        $galeria->nombre = $request->nombre;
        $galeria->ubicacion = $request->ubicacion;
        $galeria->descripcion = $request->descripcion;
        $galeria->imagen = $request->file('image')->store('galeria');
        $galeria->save();

        return $request;
    }
}
