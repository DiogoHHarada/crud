<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    //
    public function index(){
        $rows = Curso::all();
        return view ('admin.cursos.index', compact('rows'));
    }

    public function adicionar() {
        return view('admin.cursos.adicionar');
        }
        public function salvar(Request $req) {
        // repare que foi declarado como POST na ROTA !!
        // por isso recebe um parametro REQUEST
        return "Aqui eu salvo";
        // DESENVOLVEREMOS depois ...
        }

    public function editar($id) {
        // repare que ele recebe o id da ROTA
        $linha = Curso::find($id);
        // carrega o registro (realiza um select e um
        //fetch internamente)
        return view('admin.cursos.editar',compact('linha'));
        // manda o registro encontrado para ser editado na visão
        }

    public function excluir($id) {
        // repare que ele recebe o id da ROTA
        Curso::find($id)->delete();
        // apos selecionar o registro, é chamado o
        // método DELETE do OBJETO registro
        // é mapeado internamente como um 'delete from'
        // interno que rodara no BD
        return redirect()->route('admin.cursos');
        // abre a visão da lista de cursos
        }
}
