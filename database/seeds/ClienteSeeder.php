<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('clientes')->insert([
                  'cli_name'=>'Juanito Perez',
                  'cli_cedula'=>'1752487512',
                  'cli_telefono'=>'0959181945',       
                  'cli_fecha'=>date('Y-m-d H:i')




        ]);
    }
}
