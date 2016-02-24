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
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index ($letra = "")
    {
        $pessoas = Pessoa::where('apelido', 'like', $letra . '%')->get()->sortBy('apelido');
        return view('agenda', compact('pessoas'));
    }

    public function busca(Request $request )
    {
        $string = $request->busca;
        if ($string == '') {
            $pessoas = Pessoa::all()->sortBy('apelido');
        } else {
            $pessoas = Pessoa::where('apelido', 'like', '%' . $string . '%')->orWhere('nome', 'like', '%' . $string . '%')->get()->sortBy('apelido');
        }
        return view('agenda', compact('pessoas'));
    }
}