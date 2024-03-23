<?php

namespace App\Http\Controllers;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class mostrar extends Controller
{
    public function mostrar(){
        $host='localhost';
        $puerto='27017';

        $client=new \MongoDB\Client("mongodb://$host:$puerto");

        $filtrar=array();
        $options=array();

        $query= $client->productos->productos;
        $datos = $query->find($filtrar,$options);

        return view('productos',compact('datos'));
    }
}
