<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class CursosController extends Controller
{
    public function  index(){
        $cursos = Curso::orderBy('id','desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }
    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){
        //compact('curso') == ['curso' => $Curso] de esta manera se expesifica mejor
        //$curso = Curso::find($id);
        return view('cursos.show',['curso' => $curso]);
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        // ay dos formas de poner las validaciones esta con | y dentro de un []
        $request->validate([
            'name'=> 'required|min:3',
            'slug'=> 'required|unique:cursos,slug,'.$curso->id,
            'descripcion'=> ['required','min:3'],
            'categoria'=> 'required'
        ]);
        
        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);     
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index', $curso);  
    }
}
