<?php

use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'name'=>'molengeek',
            'extension'=>'com'
        ]);
        DB::table('domains')->insert([
            'name'=>'orange',
            'extension'=>'net'
        ]);
        DB::table('domains')->insert([
            'name'=>'blue',
            'extension'=>'info'
        ]);
    }
}
