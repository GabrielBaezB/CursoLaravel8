<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){

            $cursos = Curso::paginate();

            return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
                /* las reglas de validacion quedan en un archivo aparte -> StoreCurso (php artisan make:request StoreCurso)
           /* $curso = Curso::create([
            'name' => $request->name ,
            'description' => $request->description,
            'categoria' => $request->categoria
        ]); */

        $curso = Curso::create($request->all());

            return redirect()->route('cursos.show', $curso);
    }
    
    public function show(Curso $curso){

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){        
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);

       /* $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();*/

        $curso -> update($request -> all());

        return redirect()->route('cursos.show', $curso);

    }

    public function destroy(Curso $curso){
            $curso->delete();

            return redirect()->route('cursos.index');
    }

}
