<?php
/**
 * Created by PhpStorm.
 * User: Maicon
 * Date: 22/02/2016
 * Time: 10:56
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Telefone;
use Laravel\Lumen\Routing\Controller;

class TelefoneController extends Controller
{
    public function delete($id)
    {
        $telefone = Telefone::find($id);
        $pessoa = $telefone->pessoa;
        return view('telefone.delete', compact('pessoa','telefone'));
    }

    public function destroy($id)
    {
        Telefone::destroy($id);
        return redirect()->route('agenda.index');
    }
}