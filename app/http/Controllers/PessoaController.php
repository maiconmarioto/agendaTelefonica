<?php
/**
 * Created by PhpStorm.
 * User: Maicon
 * Date: 22/02/2016
 * Time: 10:56
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;
use Laravel\Lumen\Routing\Controller;

class PessoaController extends Controller
{
    public function create()
    {
        return view('pessoa.create');
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