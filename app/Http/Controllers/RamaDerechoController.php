<?php

namespace App\Http\Controllers;

use App\Models\RamaDerecho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use paginator;

class RamaDerechoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ramas = RamaDerecho::paginate(5);

        return view('rama.index',compact('ramas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rama.create');
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

                'nombre_rama'   => 'required',

        ]);

        if(!$validator->fails()){

            $rama = new RamaDerecho;
            $rama->nombre_rama = $request->nombre_rama;
            $rama->save();
            if($rama){
                Alert::success('rama creada correctamente');
                return redirect()->route('rama.index');
            }else{
                Alert::error('Error');
                return redirect()->route('rama.create');
            }
        }else{
            Alert::error('Falta un campo');
            return redirect()->route('rama.create');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RamaDerecho  $ramaDerecho
     * @return \Illuminate\Http\Response
     */
    public function show(RamaDerecho $ramaDerecho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RamaDerecho  $ramaDerecho
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rama = RamaDerecho::find($id);
        
        return view('rama.edit', compact('rama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RamaDerecho  $ramaDerecho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[

                'nombre_rama'   => 'required',

        ]);

        if(!$validator->fails()){

            $rama = RamaDerecho::find($id);
            $rama->nombre_rama = $request->nombre_rama;
            $rama->save();
            if($rama){
                Alert::success('Rama Actualizada correctamente');
                return redirect()->route('rama.index');
            }else{
                Alert::error('Error');
                return redirect()->route('rama.create');
            }
        }else{
            Alert::error('Falta un campo');
            return redirect()->route('rama.create');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RamaDerecho  $ramaDerecho
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rama = RamaDerecho::findOrFail($id);
        $rama->delete();

        Alert::warning('Rama Eliminada Correctamente');
        return redirect()->route('rama.index');
    }
}
