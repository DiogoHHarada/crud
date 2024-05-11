@extends('layout.site')
@section('titulo','Cursos')
@section('conteudo')
    <div class="container">
        <h3 class="center">Editando Curso</h3>
        <div class="row">
            <form class="" action="{{route('admin\curso\atualizar', $linha->id)}}" 
            method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin.cursos._form')
                <button class="btn deep-orange">Atualizar</button>
            </form>
        </div>
    </div>
@endsection