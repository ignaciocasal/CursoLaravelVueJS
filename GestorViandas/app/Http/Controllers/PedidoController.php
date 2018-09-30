<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Persona;
use App\Vianda;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedidos = Pedido::orderBy('id','DESC')->paginate(3);
        $viandas = Vianda::all();
        $personas = Persona::all();
        return view('pedido.index',compact('pedidos', 'viandas', 'personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::all();
        $viandas = Vianda::all();
        return view('pedido.create', compact('personas', 'viandas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'persona_id'=>'required',
            'vianda_id'=>'required',
            'fecha_solicitud'=>'required'
        ]);
        Pedido::create($request->all());
        return redirect()->route('pedido.index')->with('success','Pedido creada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedidos = Pedido::find($id);
        return  view('pedido.show',compact('pedidos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pedido = Pedido::find($id);
        $personas = Persona::all();
        $viandas = Vianda::all();
        return view('pedido.edit',compact('pedido', 'personas', 'viandas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        //
        $this->validate($request,[
            'persona_id'=>'required',
            'vianda_id'=>'required',
            'fecha_solicitud'=>'required'
        ]);

        Pedido::find($id)->update($request->all());
        return redirect()->route('pedido.index')->with('success','Pedido actualizada satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pedido::find($id)->delete();
        return redirect()->route('pedido.index')->with('success','Pedido eliminada satisfactoriamente');
    }
}
