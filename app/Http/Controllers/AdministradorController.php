<?php

namespace App\Http\Controllers;
use App\Http\Middleware\EsAdmin;




use Illuminate\Http\Request;


class AdministradorController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware("EsAdmin");

    }
    public function index(){
        return "eres administrador";
    }
}
