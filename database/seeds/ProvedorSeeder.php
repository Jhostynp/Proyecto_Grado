<?php

use Illuminate\Database\Seeder;

class ProvedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('provedor')->insert(['prov_nombre'=>'Tecno Mac','prov_ruc'=>'1752487512','prov_telefono'=>'0959181945','prov_fecha'=>date('Y-m-d H:i')]);    

    DB::table('provedor')->insert(['prov_nombre'=>'Playplace','prov_ruc'=>'1745259635','prov_telefono'=>'0952874536','prov_fecha'=>date('Y-m-d H:i')]);    

    DB::table('provedor')->insert(['prov_nombre'=>'Tecnical estu','prov_ruc'=>'1752486532','prov_telefono'=>'0925974153','prov_fecha'=>date('Y-m-d H:i')]);



    }
}
