<?php
/**
 * Created by PhpStorm.
 * User: Maicon
 * Date: 22/02/2016
 * Time: 10:56
 */

namespace CodeAgenda\Http\Controllers;


use Laravel\Lumen\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('layout');
    }
}