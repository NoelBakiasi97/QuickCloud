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
        $filename=Str::random(10).time().'.jpg';
        Storage::disk('public')->copy('slider-01.jpg',$filename);
        DB::table('carousels')->insert([
            'title' => 'Shared hosting company',
            'text'=> 'With Landigoo responsive landing page template, you can promote your all hosting, domain and email services.',
            'img'=>$filename
        ]);


        $filename=Str::random(10).time().'.jpg';
        Storage::disk('public')->copy('slider-02.jpg',$filename);
        DB::table('carousels')->insert([
            'title' => 'Shared hosting company',
            'text'=> 'With Landigoo responsive landing page template, you can promote your all hosting, domain and email services.',
            'img'=>$filename
        ]);


        $filename=Str::random(10).time().'.jpg';
        Storage::disk('public')->copy('slider-03.jpg',$filename);
        DB::table('carousels')->insert([
            'title' => 'Shared hosting company',
            'text'=> 'With Landigoo responsive landing page template, you can promote your all hosting, domain and email services.',
            'img'=>$filename
        ]);
    }
}
