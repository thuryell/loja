@extends('shopping_layout.main')
@section('content')
<div class="row">
        <div class="col-md-6">
        <img width="500" height="500" src="{{$jogo->img_jogo}}" alt="Image" class="img-fluid" style="padding-left:30px">
        </div>
        <div class="col-md-6">
          <h2 class="text-black">{{$jogo->nome_jogo}}</h2>
          <p style="max-height:400px;overflow:auto">{{$jogo->descricao_jogo}}</p>
          <p><strong class="text-primary h4">$50.00</strong></p>
          <div class="mb-5"><small>Ainda restão {{$jogo->quant_jogo}} jogos</small>
            <div class="input-group mb-3" style="max-width: 120px;">
            <div class="input-group-prepend">
              <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
            </div>
            <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-append">
              <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
            </div>
          </div>
          </div>
          <p><a href="cart.html" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

        </div>
      </div>
@endsection
