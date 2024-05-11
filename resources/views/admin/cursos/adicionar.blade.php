@extends('layout.site')
@section('titulo','Cursos')
@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Curso</h3>
        <div class="row">
        <input type="hidden" name="_method" value="put">
            <form class="" action="{{route('admin.curso.salvar')}}" 
                method="put" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin.cursos._form')
                <button class="btn deep-orange">Salvar</button>
            </form>
        </div>
    </div>
@endsection