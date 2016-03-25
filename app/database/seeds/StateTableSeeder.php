<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([ 'id' => 1, 'state' => 'Amazonas', 'iso_3166-2' => 'VE-X' ]);
		DB::table('states')->insert([ 'id' => 2, 'state' => 'Anzoátegui', 'iso_3166-2' => 'VE-B' ]);
		DB::table('states')->insert([ 'id' => 3, 'state' => 'Apure', 'iso_3166-2' => 'VE-C' ]);
		DB::table('states')->insert([ 'id' => 4, 'state' => 'Aragua', 'iso_3166-2' => 'VE-D' ]);
		DB::table('states')->insert([ 'id' => 5, 'state' => 'Barinas', 'iso_3166-2' => 'VE-E' ]);
		DB::table('states')->insert([ 'id' => 6, 'state' => 'Bolívar', 'iso_3166-2' => 'VE-F' ]);
		DB::table('states')->insert([ 'id' => 7, 'state' => 'Carabobo', 'iso_3166-2' => 'VE-G' ]);
		DB::table('states')->insert([ 'id' => 8, 'state' => 'Cojedes', 'iso_3166-2' => 'VE-H' ]);
		DB::table('states')->insert([ 'id' => 9, 'state' => 'Delta Amacuro', 'iso_3166-2' => 'VE-Y' ]);
		DB::table('states')->insert([ 'id' => 10, 'state' => 'Falcón', 'iso_3166-2' => 'VE-I' ]);
		DB::table('states')->insert([ 'id' => 11, 'state' => 'Guárico', 'iso_3166-2' => 'VE-J' ]);
		DB::table('states')->insert([ 'id' => 12, 'state' => 'Lara', 'iso_3166-2' => 'VE-K' ]);
		DB::table('states')->insert([ 'id' => 13, 'state' => 'Mérida', 'iso_3166-2' => 'VE-L' ]);
		DB::table('states')->insert([ 'id' => 14, 'state' => 'Miranda', 'iso_3166-2' => 'VE-M' ]);
		DB::table('states')->insert([ 'id' => 15, 'state' => 'Monagas', 'iso_3166-2' => 'VE-N' ]);
		DB::table('states')->insert([ 'id' => 16, 'state' => 'Nueva Esparta', 'iso_3166-2' => 'VE-O' ]);
		DB::table('states')->insert([ 'id' => 17, 'state' => 'Portuguesa', 'iso_3166-2' => 'VE-P' ]);
		DB::table('states')->insert([ 'id' => 18, 'state' => 'Sucre', 'iso_3166-2' => 'VE-R' ]);
		DB::table('states')->insert([ 'id' => 19, 'state' => 'Táchira', 'iso_3166-2' => 'VE-S' ]);
		DB::table('states')->insert([ 'id' => 20, 'state' => 'Trujillo', 'iso_3166-2' => 'VE-T' ]);
		DB::table('states')->insert([ 'id' => 21, 'state' => 'Vargas', 'iso_3166-2' => 'VE-W' ]);
		DB::table('states')->insert([ 'id' => 22, 'state' => 'Yaracuy', 'iso_3166-2' => 'VE-U' ]);
		DB::table('states')->insert([ 'id' => 23, 'state' => 'Zulia', 'iso_3166-2' => 'VE-V' ]);
		DB::table('states')->insert([ 'id' => 24, 'state' => 'Distrito Capital', 'iso_3166-2' => 'VE-A' ]);
		DB::table('states')->insert([ 'id' => 25, 'state' => 'Dependencias Federales', 'iso_3166-2' => 'VE-Z' ]);
    }
}
