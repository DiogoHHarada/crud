<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() { // exemplo que insere um adm no banco
        $dados=['name'=>"Thiago",'email'=>"admin@email",'password'=>bcrypt("123")];
        User::create($dados);
    }
}