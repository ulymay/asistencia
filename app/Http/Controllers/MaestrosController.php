<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Maestro;

class MaestrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestros = Maestro::all();      

        return view('maestros.index', compact('maestros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maestros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maestro = new Maestro;

        $maestro->name=$request->name;
        $maestro->email=$request->email;
        $maestro->password=$request->password;


        $maestro->save();
        $maestros = Maestro::all();

        return view('maestros.index', compact('maestros'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maestro=Maestro::findOrFail($id);
        

        return view('maestros.show', compact('maestro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maestro=Maestro::findOrFail($id);
        
        foreach($maestro->clases as $clase){
            $prueba = $clase->codigo;
        }

        return view('maestros.edit', compact(['maestro', 'prueba']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $maestro=Maestro::findOrFail($id);

        $maestro->update($request->all());

        return redirect('/maestros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maestro=Maestro::findOrFail($id);

        $maestro->delete();

        return redirect('/maestros');
    }

    public function clases($id){

        $maestro=Maestro::findOrFail($id);
        
        foreach($maestro->clases as $clase){
            $prueba = $clase->codigo;
        }

        return view('maestros.clases', compact(['maestro', 'prueba']));
    }
}
