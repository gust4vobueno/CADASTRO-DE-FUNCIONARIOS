<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', ['funcionarios' => $funcionarios]);
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Criar funcionário no bacno de dados
        Funcionario::create( $request->all() );
        return redirect()->route('funcionarios-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $funcionarios = Funcionario::where('id', $id)->first();
        if(!empty($funcionarios))
        {
            return view('funcionarios.edit', ['funcionarios'=>$funcionarios]);
        }else{
            return redirect()->route('funcionarios-index');
        }
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
        $data = 
        [
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone
        ];

        Funcionario::where('id', $id)->update($data);
        return redirect()->route('funcionarios-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Funcionario::where('id', $id)->delete();
        return redirect()->route('funcionarios-index');
    }
}
