<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
         $this->call(CursosSeeder::class);
         $this->call(DisciplinasSeeder::class);
         $this->call(AlunosSeeder::class);
         $this->call(TurmasSeeder::class);
         $this->call(ProfessoresSeeder::class);
        

    }
}
