<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function fibo(Request $request){
        $request->validate([
            'n' => 'required|numeric|min:1|max:20',
        ]);
        $n = intval($request->n);
        $suma = 0;
        $v2 = 1;

        $fibonacci  = [0,1];
 
        for($i=2;$i<=$n;$i++)
            {
                $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
            }
        
        for ($i=1; $i < $n; $i++) { 
            
            //Variable temporal para almacenar el número de la primera variable
            $temp = $suma;

            //La primera variable pasa a contener el valor de la segunda
            $suma = $v2;

            //Sumamos el valor de la temporal y la variable 1
            $v2 = $temp + $suma;
            }
                return view('fibo', compact('n', 'suma', 'fibonacci'));
        }
        

    function npalabras(Request $request){
        $request->validate([
            'cadena' => 'required',
        ]);
        $cadena = $request->cadena;
        $total = str_word_count($cadena, 0);
        return view('npalabras', compact('cadena', 'total'));         
    }

    function nvocales(Request $request){
        $request->validate([
            'cadena' => 'required',
        ]);
        $cadena = $request->cadena;
        $total = 0;
        /*
            Convertimos toda la cadena a minúscula de una vez
        */
        $cadena = strtolower($cadena);
    
        /*
            Recorrer la cadena desde 0 hasta su longitud menos 1 (por eso usamos <)
            Ponemos la longitud dentro de una variable para evitar
            múltiples llamadas a strlen() en cada iteración
        */
        $longitud = strlen($cadena);
    
        for ($i = 0; $i < $longitud; $i++) { 
            if (in_array($cadena[$i], ["a", "e", "i", "o", "u"])) {
                $total++;
            }
        }

        return view('nvocales', compact('cadena', 'total'));
    }
}