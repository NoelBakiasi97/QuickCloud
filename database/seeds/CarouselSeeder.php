<?php

use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert([
            'title' => 'Shared hosting company',
            'text'=> 'With Landigoo responsive landing page template, you can promote your all hosting, domain and email services.',
            'img'=>'slider-01.jpg'
        ]);
        DB::table('carousels')->insert([
            'title' => 'Shared hosting company',
            'text'=> 'With Landigoo responsive landing page template, you can promote your all hosting, domain and email services.',
            'img'=>'slider-02.jpg'
        ]);
        DB::table('carousels')->insert([
            'title' => 'Shared hosting company',
            'text'=> 'With Landigoo responsive landing page template, you can promote your all hosting, domain and email services.',
            'img'=>'slider-03.jpg'
        ]);
    }
}
