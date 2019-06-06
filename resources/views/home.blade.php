@extends('layouts.app')
@section('content-title')
    Dashboard
@endsection
@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


    <table id="mytable" class="display">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Imagem</th>
            <th scope="col">Valor</th>
            <th style="width:20%">Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jogos as $jogo)
            <tr>
                <th scope="row">{{$jogo->nome_jogo}}</th>
                <td>{{$jogo->quant_jogo}}</td>
                <td><img src="{{$jogo->img_jogo}}" width="50" height="50"></td>
                <td>{{$jogo->valor_jogo}}</td>
                <td><a class="btn btn-secondary" href="{{route('editar',$jogo->id)}}">Editar</a>
                <a href="{{route('deletar',$jogo->id)}}" class="btn btn-danger">Deletar</a></td>
            </tr>
            @endforeach
        </tbody>
        </table>
</div>
    @section('js')
        <script>
            $(document).ready( function () {
                $('#mytable').DataTable();
            } );
        </script>    
        @if (session('alerta'))
        <script>InfoToat("","{{session('alerta')}}")</script>
        @endif
    @endsection
    
@endsection
