<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'email'=>'ourmail@gmail.com',
            'url'=>'www.quick-cloud.com',
            'adress'=>'Place de la minnoterie 10, 1080 Molenbeek, Brussels, Belgium',
            'number'=>'Tel: 0032484525464'
        ]);
    }
}
