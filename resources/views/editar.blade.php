@extends('layouts.app')
@section('content-title')
    Editando {{$jogo->nome_jogo}}
@endsection
@section('style')
<style>
.hidden{
    display: none;
}
</style>
@endsection
@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="container">
    <form method="POST" action="{{Route('edit_jogo')}}" enctype="multipart/form-data"> 
        {{ csrf_field() }}
        <div class="row">
        <div class="col-7">
            <input type="hidden" name="id" value="{{$jogo->id}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome do jogo</label>
                <input type="text" name="nome_jogo" class="form-control" id="nome" value="{{$jogo->nome_jogo}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Quantidade</label>
                <input type="text" class="form-control" name="quant_jogo" value="{{$jogo->quant_jogo}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Valor</label>
                <input type="text" class="form-control valor" name="valor_jogo" value="{{number_format($jogo->valor_jogo,2)}}">
            </div>
            <div class="form-group">
                <small style="padding-left: 18px;color:gray">Descrição</small>
                <textarea style="width:100%" class="form-control mx-auto" name="descricao_jogo" id="Textarea" rows="3">{{$jogo->descricao_jogo}}</textarea>
            </div>
        </div>
        <div class="col-5">
                <a class="btn btn-info" id="click_img">Escolha a imagen</a>
                <input type='file' id="imgInp" name="img_jogo" accept="image/*" class="hidden"><br><br>
                <img id="blah" width="300" height="300"  src="{{$jogo->img_jogo}}" alt="your image" />
        </div>
    </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>
    
@endsection
@section('js')
<script>
    $("#click_img").click(function(){
        $("#imgInp").click();
        
    })
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
                $("#blah").removeClass("hidden");
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
</script>

@endsection