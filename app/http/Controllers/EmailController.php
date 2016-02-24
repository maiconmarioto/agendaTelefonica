<?php
namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa;
use CodeAgenda\Entities\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{

    public function create($id)
    {
        $pessoa = Pessoa::find($id);
        return view('email.create', compact('pessoa'));
    }

    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'descricao' => 'required|min:4|max:50',
            'email' => 'required|email'
        ]);
        if($validator->fails()) {
            return redirect()->route('email.create', ['id' => $id])->withErrors($validator)->withInput();
        }
        $pessoa = Pessoa::find($id);
        $data = $request->all();
        $data['pessoa_id']=$pessoa->id;
        Email::create($data);

        $letra = strtoupper(substr($pessoa->apelido,0,1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function delete($id)
    {
        $email = Email::find($id);
        $pessoa = $email->pessoa;
        return view('email.delete', compact('pessoa', 'email'));
    }

    public function destroy($id)
    {
        Email::destroy($id);
        return redirect()->route('agenda.index');
    }
}
