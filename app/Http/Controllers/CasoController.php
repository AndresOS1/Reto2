<?php

namespace App\Http\Controllers;

use App\Models\Caso;
use App\Models\Instancia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use paginator;

class CasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casos = Caso::paginate(5);
        $instancias = Instancia::all();

        return view('caso.index', compact('casos','instancias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instancias = Instancia::all();

        return view('caso.create',compact('instancia'));
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
        ]);

        if(!$validator->fails()){

            $Caso = new Caso;
            $Caso->descripcion_caso = $request->descripcion_caso;
            $Caso->instancia_id = $request->instancia_id;
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


        return view('caso.edit', compact('caso', 'instancias'));
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
        ]);

        if(!$validator->fails()){

            $Caso = Caso::find($id);
            $Caso->descripcion_caso = $request->descripcion_caso;
            $Caso->instancia_id = $request->instancia_id;
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
