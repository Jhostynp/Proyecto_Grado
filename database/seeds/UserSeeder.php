<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('users')->insert([
                  'usu_name'=>'admin',
                  'usu_cedula'=>'1715754352',
                  'email'=>'admin@gmail.com',
                  'password'=>bcrypt('12346578'),
                  'created_at'=>date('Y-m-d H:i')



        ]);
    }
}
