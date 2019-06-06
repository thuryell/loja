<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cadastro_jogos extends Model
{
    protected $primaryKey = 'id';

    protected $table = "cadastro_jogos";

    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'nome_jogo',
        'quant_jogo',
        'valor_jogo',
        'img_jogo',
        'descricao_jogo',
    ];
}
