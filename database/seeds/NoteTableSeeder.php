<?php

use Illuminate\Database\Seeder;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      App\Note::create([
        'title' => 'Titulo de la nota',
        'content' => 'Contenido de la nueva nota'
      ]);

      App\Note::create([
        'title' => 'Note Prueba',
        'content' => 'Contenidos'
      ]);

    }
}
