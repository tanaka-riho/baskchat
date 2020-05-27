<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = [
            ['information'=>'富山県出身', 'name'=>'八村塁', 'country_id' => '1'],
            ['information'=>'小柄', 'name'=>'Stephen Curry', 'country_id' => '2'],
           ];
        
        DB::table('players')->insert($players);
    }
}
