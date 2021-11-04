<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Categoria;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function showPessoa()
    {
        return response()->json(Pessoa::all());
    }
    public function addPessoa(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|string',
            'email' => 'required|email',
        ]);
        $pessoa=new Pessoa();
        $pessoa->nome=$request->input('nome');
        $pessoa['e-mail']=$request->input('email');
        $pessoa->categoria=3;
        $pessoa->save();
        return response()->json(['user' => $pessoa, 'message' => 'CREATED'], 201);
    }
    public function showCateogia()
    {
        return Categoria::all();
    }
}