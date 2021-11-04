<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Categoria;
use Hamcrest\Type\IsInteger;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function getPessoas()
    {
        return response()->json(Pessoa::all()->paginate(5), 200);
    }
    public function getPessoascategoria()
    {
        return response()->json(Pessoa::with('categoria')->paginate(5), 200);
    }
    public function getPessoa($codigo)
    {
        return response()->json(Pessoa::find($codigo), 200);
    }
    public function getPessoacategoria($codigo)
    {
        return response()->json(Pessoa::with('categoria')->find($codigo), 200);
    }
    public function createPessoa(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|string',
            'email' => 'required|email',
        ]);
        $pessoa = new Pessoa();
        $pessoa->nome = $request->input('nome');
        $pessoa['e-mail'] = $request->input('email');
        $pessoa->categoria = 3;
        $pessoa->save();
        return response()->json(['pessoa' => $pessoa, 'message' => 'CREATED'], 201);
    }
    public function updatePessoa($codigo, Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|string',
            'email' => 'required|email',
            'categoria' => 'required'
        ]);
        $categoria = $request->input('categoria');
        Pessoa::find($codigo)->update(
            [
                'nome' => $request->input('nome'),
                'e-mail' => $request->input('email'),
                'categoria' => is_int($categoria) ? $categoria : Categoria::where('nome', $categoria)->first()->codigo,
            ]
        );
        return response()->json(['message' => 'UPDATED'], 202);
    }
    public function updatePatchPessoa($codigo, Request $request)
    {
        Categoria::where('nome', $request->input('categoria'))->first()->codigo;
        $this->validate($request, [
            'nome' => 'string',
            'email' => 'email',
        ]);

        $req = $request->only('nome', 'email', 'categoria');
        if (array_key_exists('email', $req)) {
            $req['e-mail'] = $req['email'];
            unset($req['email']);
        }
        if (array_key_exists('categoria', $req)) {
            $categoria = $request->input('categoria');
            $req['categoria'] = is_int($categoria) ? $categoria : Categoria::where('nome', $categoria)->first()->codigo;
        }
        Pessoa::find($codigo)->update($req);
        return response()->json(['message' => 'UPDATED'], 202);
    }
    public function deletePessoa($codigo)
    {
        Pessoa::find($codigo)->delete();
        return response()->json(['message' => 'DELETED'], 200);
    }
    public function getCateogias()
    {
        return response()->json(Categoria::all(), 200);
    }
}
