<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadastro_jogos;
class JogoController extends Controller
{
    public function Index()
    {
        return view("inserir_jogo");
    }
    public function inserir(Request $request)
    {  
        if(!is_null($request->img_jogo)){      
           $img = "data:".$request->img_jogo->GetMimeType().";base64,".base64_encode(file_get_contents($request->img_jogo));
        }
        // dd($img);
        
        $request->validate([
            'nome_jogo' => 'required',
            'quant_jogo' => 'required',
            'valor_jogo' => 'required',
        ]);
        
        $itens =  $request->except('_token');
        $itens['valor_jogo'] = str_replace(".","",$itens['valor_jogo']);
        $itens['valor_jogo'] = str_replace(",",".",$itens['valor_jogo']);
        $itens['img_jogo'] = $img;
        
        cadastro_jogos::create($itens);
        session()->flash('alerta',"Inserido com sucesso :)");
        return redirect()->route("home");
    }
    public function edit(Request $request)
    {
        if(!is_null($request->img_jogo)){      
            $img = "data:".$request->img_jogo->GetMimeType().";base64,".base64_encode(file_get_contents($request->img_jogo));
         }else{
             $img = $this->getImgBase64($request->id);
         }
        $itens =  $request->except('_token');
        
        $itens['valor_jogo'] = str_replace(".","",$itens['valor_jogo']);
        $itens['valor_jogo'] = str_replace(",",".",$itens['valor_jogo']);

        $jogo = cadastro_jogos::find($itens['id']);
        $jogo->valor_jogo = $itens['valor_jogo'];
        $jogo->quant_jogo = $itens['quant_jogo'];
        $jogo->nome_jogo = $itens['nome_jogo'];
        $jogo->img_jogo = $img;
        $jogo->descricao_jogo = $itens['descricao_jogo'];
        $jogo->save();
        session()->flash('alerta',"Alterado com sucesso :)");
        return redirect()->route("home");
    }

    protected function getImgBase64($id){
       
        return cadastro_jogos::where("id",$id)->value('img_jogo');
    }
}
