<?php

namespace App\Http\Controllers;

use App\Models\Registros;
use App\Models\User;
use App\Models\Usuarios;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    public function registro(Request $request)
    {
        if ($request->ajax()) {
            $usuario = new Usuarios();
            $usuario->nombre = $request->nombre;
            $usuario->apellidos = $request->apellidos;
            if (isset($request->institucion)) {
                $usuario->institucion = $request->institucion;
            }
            $usuario->save();
            return view('layouts.busqueda', compact('usuario'))->render();
        }
        return 'Error';
        //
    }

    public function buscar(Request $request)
    {
        $consulta = [];

        if (isset($request->codigo)) {
            array_push($consulta, " codigo like '%" . $request->codigo . "%' ");
        }
        if (isset($request->sexo)) {
            if (strcmp($request->sexo, 'Cualquiera') != 0) {
                array_push($consulta, " sexo = '" . $request->sexo . "'");
            } else {
                array_push($consulta, " sexo = 'HOMBRE' or sexo = 'MUJER'");
            }
        }
        if (isset($request->edad)) {
            array_push($consulta, ' generacion = ' . $request->edad);
        }
        if (isset($request->nivel_educativo)) {
            $temp = " nivel_educativo  =  '" . $request->nivel_educativo . "'";
            array_push($consulta, $temp);
        }
        if (isset($request->contenido)) {
            array_push($consulta, " text_archivo like '%" . $request->contenido . "%'");
            $flag = 0;
        }
        if (count($consulta) > 0) {
            $consulta_f = '';
            for ($i = 0; $i < count($consulta); $i++) {
                if ($i == 0) {
                    $consulta_f = $consulta_f . $consulta[$i];
                } else {
                    $consulta_f = $consulta_f . ' and ' . $consulta[$i];
                }
            }
            $registros = Registros::whereRaw($consulta_f)->get();
        } else {
            $registros = Registros::all();
        }

        if (isset($flag)) {
            foreach ($registros as $item) {
                $prueba = strpos($item->text_archivo, $request->contenido);
                $item->text_archivo = substr($item->text_archivo, $prueba - 20, 100);
                $item->text_archivo = str_replace($request->contenido, "<b style='background:yellow'>" . $request->contenido . '</b>', $item->text_archivo);
            }
        } else {
            foreach ($registros as $item) {
                $item->text_archivo = substr($item->text_archivo, 1, 60);
            }
        }
        
        return view('layouts.resultados', compact('registros'))->render();
    }
}
