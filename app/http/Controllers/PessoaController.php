<?php
/**
 * Created by PhpStorm.
 * User: Maicon
 * Date: 22/02/2016
 * Time: 10:56
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laravel\Lumen\Routing\Controller;

class PessoaController extends Controller
{
    public function create()
    {
        return view('pessoa.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nome' => 'required|min:3|max:255|unique:pessoas',
            'apelido' => 'required|min:2|max:50',
            'sexo' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->route('pessoa.create')->withErrors($validator)
                ->withInput();
        }

        $pessoa = Pessoa::create($request->all());
        $letra = strtoupper(substr($pessoa->apelido,0,1));

        return redirect()->route('agenda.letra',['letra' => $letra]);
    }

    public function edit($id)
    {
        $pessoa = Pessoa::find($id);
        return view ('pessoa.edit', compact('pessoa'));
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::find($id);

        $validator = Validator::make($request->all(),[
            'nome' => 'required|min:3|max:255|unique:pessoas,nome,'.$pessoa->id,
            'apelido' => 'required|min:2|max:50',
            'sexo' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->route('pessoa.create')->withErrors($validator)
                ->withInput();
        }


        $pessoa->fill($request->all())->save();

        $letra = strtoupper(substr($pessoa->apelido,0,1));

        return redirect()->route('agenda.letra',['letra' => $letra]);
    }

    public function delete($id)
    {
        $pessoa = Pessoa::find($id);
        return view('pessoa.delete', compact('pessoa'));
    }

    public function destroy($id)
    {
        Pessoa::destroy($id);
        return redirect()->route('agenda.index');
    }
}