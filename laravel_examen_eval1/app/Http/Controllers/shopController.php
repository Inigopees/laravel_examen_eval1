<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
use App\tiendas;

class shopController extends Controller
{
    public function create(request $request){
        $tienda = new Tiendas;
        $tienda->name = $request->get('nombre');
        $tienda->save();
    }
}
