<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorias')->insert(['cat_nombre'=>'Terror']);
        DB::table('categorias')->insert(['cat_nombre'=>'Suspenso']);
        DB::table('categorias')->insert(['cat_nombre'=>'Acción']);
        DB::table('categorias')->insert(['cat_nombre'=>'Aventura']);



    }}
