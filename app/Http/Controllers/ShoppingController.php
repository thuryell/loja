<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadastro_jogos;

class ShoppingController extends Controller
{
    protected function VerifID($jogo)
    {
        if(!is_null($jogo)){
            // dd($jogo);
            return $jogo;
        }else{
          return true;
        }
    }
    protected function GetJogos($id)
    {
        return $this->VerifID(cadastro_jogos::find($id));
    }
    public function index()
    {
        $jogos = cadastro_jogos::paginate(12);
        return view('shopping.loja_shopping',compact('jogos'));
    }
    public function produto($categoria,$id)
    {
        $jogo = $this->GetJogos($id);

      if ($jogo === true) {
            return redirect()->route('loja');
       } else {

            return view('shopping.produto_shopping',compact('jogo'));
       }

    }
}
