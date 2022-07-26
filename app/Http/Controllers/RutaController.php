<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutaController extends Controller
{
    //pagina tipo
    public function showT()
    {
       
       return view('paginas.tipos');
    }
    //pagina bus
    public function showB()
    {
       
      return view('paginas.bus');
    }
    //pagina persona
    public function showPer()
    {
       
      return view('paginas.persona');
    }
    //pagina cooperativa
    public function showC()
    {
       
      return view('paginas.coop');
    }
    //paginas paradas
    public function showPar()
    {
       
      return view('paginas.paradas');
    }
    //pagina rutas
    public function showR()
    {
       
      return view('paginas.ruta');
    }
    //pagina PaginaPrincipalInfo
    public function showPP()
    {
       
      return view('paginas.principal');
    }
    public function showH()
    {
       
      return view('paginas.horario');
    }
    public function showRe()
    {
       
      return view('paginas.registro');
    }

    public function showDa()
    {
       
      return view('paginas.dasboard');
    }

    public function showEq()
    {
       
      return view('paginas.equipodev');
    }

    public function showPr()
    {
       
      return view('paginas.proyecto');
    }

    public function showIn()
    {
       
      return view('paginas.info');
    }
}

