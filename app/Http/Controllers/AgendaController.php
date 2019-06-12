<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = Agenda::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('agendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required'
            ] ,
            [
                'nome.required' => 'Por favor, informe o seu nome.'
            ]
        );


        Agenda::create([
            'user_id' => Auth::id(),
            'nome' => $request->nome
        ]);

        return redirect()->route('home')->with('sucess', 'Contato Salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agenda = Agenda::find($id);
        return view('agendas.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {

        $request->validate(
            [
                'nome' => 'required'
            ] ,
            [
                'nome.required' => 'Por favor, informe o seu nome.'
            ]
        );

        $agenda = Agenda::find($id);

        $agenda->nome = $request->nome;
        $agenda->save();

        return redirect()->route('home')->with('sucess', 'Contato alterado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
