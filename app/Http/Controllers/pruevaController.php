<?php

namespace sistema\Http\Controllers;

use Illuminate\Http\Request;
use sistema\Model\pruevaModel;
use sistema\Http\Requests\pruevaRequest;

use Session;
use Redirect;

class pruevaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    //Mostar todo
        //$users = pruevaModel::all();
       // ordenar y paginar
       // $users = pruevaModel::orderBy('id', 'DESC')->paginate();

        $users = pruevaModel::paginate(2);
       return view('prueba.indexPrueva',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('prueba.createPrueva');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(pruevaRequest $request)
    {
        pruevaModel::create([
            'nombre' => $request['nombre'],
            'apellido' =>$request['apellido']
        ]);

        Session::flash('message','Usuario Agregado Exitosamente');
        return redirect('/prueva');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
         $user = pruevaModel::find($id);
        return view('prueba.editPrueva',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(pruevaRequest $request, $id)
    {
        $user = pruevaModel::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/prueva');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $result= pruevaModel::destroy($id);
       // Session::flash('message','Usuario Eliminado Correctamente');
      return redirect('/prueva');
    }
}
