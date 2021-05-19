<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    public function formulario_buscador(){

        //mostrar formulario del metabuscador
        return view('metabuscador');

    }

    //servidor:llegan los datos aqui
    public function buscar(){

        //1. Almacenar los datos transmitidos a respectivas variables
        $termino=$_POST["termino"];
        $motores=$_POST["motores"];

        //2. determinar cual motor de busqueda fue el elegido
        switch($motores){
            case 1:// redireccional a la direccion de google
                return redirect()->to("https://www.google.com/search?q=$termino");
                 break;
            case 2:
                return redirect()->to("https://www.bing.com/search?q=$termino");
                 break;

            case 3:
                return redirect()->to("https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=$termino");
                 break;

            case 4:
                return redirect()->to("https://co.search.yahoo.com/search?fr=mcafee&type=E211CO1274G0&p=$termino");
                 break;

            case 5:
                return redirect()->to("https://yandex.com/search/?text=$termino");
                 break;

            case 6:
                return redirect()->to("https://www.ask.com/web?q=$termino");
                 break;

            case 7:
                return redirect()->to("https://duckduckgo.com/?q=$termino");
                 break;

            case 8:
                return redirect()->to("https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=1&ie=utf8&query=$termino");
                 break;

            case 9:
                return redirect()->to("https://search.seznam.cz/?q=$termino");
                 break;

            case 10:
                return redirect()->to("https://search.aol.com/aol/search?q=$termino");
                 break;
        }

        //print_r($_POST);



    }
}
