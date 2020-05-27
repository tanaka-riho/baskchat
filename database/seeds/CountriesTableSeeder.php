<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['country' => '日本'],
            ['country' => 'アメリカ'], 
            ['country' => 'アルゼンチン'],
            ['country' => 'スペイン'],
            ['country' => 'フランス'],
            ['country' => 'ナイジェリア'],
            ['country' => 'イラン'],
            ['country' => 'オーストラリア'],
            ['country' => ''],
            ['country' => ''],
            ['country' => ''],
            ['country' => ''],
        ];    
        
        DB::table('countries')->insert($countries);
    }
}
