<?php

namespace App\Http\Controllers;

use App\Models\Caso;
use App\Models\Instancia;
use App\Models\RamaDerecho;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

use paginator;

class CasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $casos = Caso::paginate(5);
        $busqueda=$request->buscar;
        $casos = Caso::where('descripcion_caso','like','%'.$busqueda.'%')
        ->paginate(7);
        $instancias = Instancia::all();
        $ramas = RamaDerecho::all();

        return view('caso.index', compact('casos','instancias', 'ramas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instancias = Instancia::all();
        $ramas = RamaDerecho::all();

        return view('caso.create',compact('instancias','ramas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[

                    'descripcion_caso'   => 'required',
                    'instancia_id'       => 'required',
                    'rama_id'       => 'required',

        ]);

        if(!$validator->fails()){

            $Caso = new Caso;
            $Caso->descripcion_caso = $request->descripcion_caso;
            $Caso->instancia_id = $request->instancia_id;
            $Caso->user_id = Auth()->user()->id;
            $Caso->rama_id = $request->rama_id;

            $Caso->save();
            if($Caso){
                Alert::success('Caso creado correctamente');
                return redirect()->route('caso.index');
            }else{
                Alert::error('Error');
                return redirect()->route('caso.create');
            }
        }else{
            Alert::error('Falta un campo');
            return redirect()->route('caso.create');

        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function show(Caso $caso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $caso = Caso::find($id);
        $instancias = Instancia::all();
        $ramas = RamaDerecho::all();



        return view('caso.edit', compact('caso', 'instancias','ramas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[

                    'descripcion_caso'   => 'required',
                    'instancia_id'       => 'required',
                    'rama_id'            => 'required',

        ]);

        if(!$validator->fails()){

            $Caso = Caso::find($id);
            $Caso->descripcion_caso = $request->descripcion_caso;
            $Caso->instancia_id = $request->instancia_id;
            $Caso->rama_id = $request->rama_id;
            $Caso->save();
            if($Caso){
                Alert::success('Caso Actualizado correctamente');
                return redirect()->route('caso.index');
            }else{
                Alert::error('Error');
                return redirect()->route('caso.edit');
            }
        }else{
            Alert::error('Falta un campo');
            return redirect()->route('caso.edit');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caso = Caso::find($id);
        $caso->delete();
        Alert::warning('Caso eliminado Correctamente');
        return redirect()->route('caso.index');
    }
}
