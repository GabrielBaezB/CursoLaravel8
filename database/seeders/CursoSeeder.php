<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $curso = new Curso();

        $curso->name = "Laravel";
        $curso->descripcion = "el mejor framework PHP";
        $curso->categoria = "Desarrollo web";

        $curso->save();

        $curso2 = new Curso();

        $curso2->name = "Vue";
        $curso2->descripcion = "el mejor framework PHP";
        $curso2->categoria = "Desarrollo web";

        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = "Js";
        $curso3->descripcion = "el mejor framework PHP";
        $curso3->categoria = "Desarrollo web";

        $curso3->save();

    }
}
