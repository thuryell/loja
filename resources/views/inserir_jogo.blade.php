@extends('layouts.app')
@section('content-title')
Inserir Jogos
@endsection
@section('style')
<style>
.hidden{
    display: none;
}
</style>
@endsection
@section('content')
<form action="{{Route('inserir')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="card mx-auto" style="width: 50rem;">
        <div class="row">
            <div class="col-md-7">
                <div class="form-group"><br>
                    <small style="padding-left: 18px;color:gray">Nome do jogo</small>
                    <input style="width:95%" type="text" class="form-control mx-auto" id="jogo" aria-describedby="emailHelp" placeholder="Digite o nome do jogo" name="nome_jogo">
                </div>
                <div class="form-group"><br>
                    <small style="padding-left: 18px;color:gray">Quantidade</small>
                    <input style="width:95%" type="text" class="form-control mx-auto" id="quantidade" aria-describedby="emailHelp" placeholder="Digite quantidade do jogo" name="quant_jogo">
                </div>
                <div class="form-group"><br>
                    <small style="padding-left: 18px;color:gray">Valor</small>
                    <input style="width:95%" type="text" class="form-control mx-auto valor"  aria-describedby="emailHelp" placeholder="Digite o valor do jogo" name="valor_jogo">
                </div><br>
                <div class="form-group">
                    <small style="padding-left: 18px;color:gray">Descrição</small>
                    <textarea style="width:95%" class="form-control mx-auto" name="descricao_jogo" id="Textarea" rows="3"></textarea>
                </div>
            </div>
            <div class="col-md-5">
                <br>
                    <a class="btn btn-info" id="click_img">Escolha a imagen</a>
                    <input type='file' id="imgInp" name="img_jogo" accept="image/*" class="hidden"><br><br>
                    <img id="blah" width="300" height="300"  src="#" class="hidden" alt="your image" />

            </div>
        </div>
        <div class="row">
            <div class="col-md-5">

            </div>
            <div class="col-md-4">
                <button class="btn btn-primary"  type="submit">Enviar <i class="fas fa-paper-plane"></i></button>

            </div>
        </div>
        <br>
    </div>

</form>
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