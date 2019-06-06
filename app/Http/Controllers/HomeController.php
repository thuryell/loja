<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadastro_jogos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->nivel_usuario == 0){
            $jogos = cadastro_jogos::get();
            return view('home',compact('jogos'));    
        }
        else{
            return redirect()->route('loja');
        }

    }
    
    public function deletar($id)
    {
        cadastro_jogos::where('id',$id)->delete();
        return back();
    }

    public function editar($id)
    {
        $jogo = cadastro_jogos::find($id);
        return view("editar",compact("jogo"));
    }
}
