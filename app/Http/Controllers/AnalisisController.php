<?php

namespace App\Http\Controllers;
use App\Equipos;
use App\Analisis;
use App\Clientes;
use App\Tiempo;
use App\Material;
use App\Solicitudes;
use App\User;
use Auth;
use Illuminate\Http\Request;
use DB;


class AnalisisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $analisis = DB::table('analisis as a')
        ->select('a.id','a.nombre','a.costo','a.precio','a.material','a.tiempo','a.porcentaje','a.estatus')
       // ->where('a.empresa', '=', Auth::user()->empresa)
        ->where('a.estatus', '=', 1)
        ->get(); 

        return view('analisis.index', compact('analisis'));
        //
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $material = Material::where('estatus','=',1)->get();
        $tiempo = Tiempo::where('estatus','=',1)->get();
        return view('analisis.create', compact('tiempo','material'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        
            $analisis = new Analisis();
            $analisis->nombre =$request->nombre;
            $analisis->costo =$request->costo;
            $analisis->precio =$request->precio;
            $analisis->material =$request->material;
            $analisis->tiempo =$request->tiempo;
            $analisis->porcentaje =$request->porcentaje;
            $analisis->codigo =$request->codigo;
            $analisis->condiciones =$request->condiciones;
            $analisis->condiciones1 =$request->condiciones1;
            $analisis->muestra =$request->muestra;
            $analisis->observaciones =$request->observaciones;
            $analisis->usuario =Auth::user()->id;
            $analisis->save();
               

        return redirect()->action('AnalisisController@index')
        ->with('success','Creado Exitosamente!');

        //return redirect()->action('AnalisisController@index', ["created" => true, "analisis" => Analisis::all()]);

    }

    public function ver($id)
    {
      $analisis = Analisis::where('id','=',$id)->first();
   
      return view('analisis.ver', compact('analisis'));
    }

    
    public function verView($id)
    {
      $analisis = Analisis::where('id','=',$id)->first();
   
      return view('analisis.ver', compact('analisis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Analisis  $Clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material = Material::where('estatus','=',1)->get();
        $tiempo = Tiempo::where('estatus','=',1)->get();
        $analisis = Analisis::where('id','=',$id)->first();

        return view('analisis.edit', compact('material','tiempo','analisis')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $Clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Analisis $analisis)
    {


       

      $p = Analisis::find($request->id);
      $p->nombre =$request->nombre;
      $p->costo =$request->costo;
      $p->precio =$request->precio;
      $p->material =$request->material;
      $p->tiempo =$request->tiempo;
      $p->porcentaje =$request->porcentaje;
      $p->codigo =$request->codigo;
      $p->condiciones =$request->condiciones;
      $p->condiciones1 =$request->condiciones1;
      $p->muestra =$request->muestra;
      $p->observaciones =$request->observaciones;
      $res = $p->update();
    
    
    return redirect()->action('AnalisisController@index')
    ->with('success','Modificado Exitosamente!');

        //
    }

    public function dispon($id)
    {

        $analisis = Analisis::find($id);
        $analisis->disponible = 0;
        $analisis->cliente = '';
        $analisis->ult_ingreso = null;
        $analisis->save();

        return redirect()->action('AnalisisController@index')
        ->with('success','Desocupada Exitosamente!');

        //
    }

    public function dispon1($id,$id2)
    {

      $analisis = Analisis::find($id);
      $analisis->disponible = 0;
      $analisis->cliente = '';
      $analisis->ult_ingreso = null;
      $analisis->save();

      $chk = Solicitudes::where('id','=',$id2)->first();
      $chk->estatus =2;
      $res = $chk->update();

     
      return redirect()->action('HomeController@index')
      ->with('success','Desocupada Exitosamente!');        
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $Clientes
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $analisis = Analisis::find($id);
        $analisis->estatus = 0;
        $analisis->save();

        return redirect()->action('AnalisisController@index');

        //
    }
}

