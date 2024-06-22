<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoControllerApi extends Controller
{
    public function store(Request $req){
        $novoCurso = Curso::create($req->all());
        return response($novoCurso,201);    
            // retorna o registro em JSON 
            // com statusCode 200
    }

    public function index(){
        return Curso::all();
    }

    public function show($id){
        $curso = Curso::find($id);
        if( $curso <> null ){
            return response($curso,200); // ststusCode 200 se Ok
        }else {
            return response('',404);  // statusCode 404 se não enconttrado
        }
    }

    public function update(Request $req, $id){
        if(Curso::find($id)->update($req->all()) ){
            return response('OK',200);
        }else{
            return response('',404);
        }
    }

    public function destroy($id){
        $cursoEncontrado = Curso::find($id);
        if($cursoEncontrado){
            if($cursoEncontrado->delete()){
                return response('OK',200);
            } else{
                return response('',400);
            } 
        } else{
           return response('',404);
        }
    }
}
