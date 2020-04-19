<?php

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filename=Str::random(10).time().'.jpg';
        Storage::disk('public')->copy('testi_01.png',$filename);
        DB::table('testimonials')->insert([
            'title'=>'Commentaire 1',
            'comment'=>'Très bonne société aight si si la famille respect wlh',
            'img'=>$filename,
            'name'=>'Bob Marley'
        ]);

        $filename=Str::random(10).time().'.jpg';
        Storage::disk('public')->copy('testi_02.png',$filename);
        DB::table('testimonials')->insert([
            'title'=>'Commentaire 2',
            'comment'=>'Très bonne société aight si si la famille respect wlh',
            'img'=>$filename,
            'name'=>'Bg dla Night'
        ]);
        $filename=Str::random(10).time().'.jpg';
        Storage::disk('public')->copy('testi_03.png',$filename);
        DB::table('testimonials')->insert([
            'title'=>'Commentaire 3',
            'comment'=>'Très bonne société aight si si la famille respect wlh',
            'img'=>$filename,
            'name'=>'Girl Power'
        ]);
    }
}
