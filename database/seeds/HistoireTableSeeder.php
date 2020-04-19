<?php

use Illuminate\Database\Seeder;

class HistoireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filename=Str::random(10).time().'.jpg';
        Storage::disk('public')->copy('img-01.jpg',$filename);
        DB::table('histoires')->insert([
            'img'=>$filename,
            'year'=>2005,
            'text'=>'The year in which on a été des bonhommes wlh'
        ]);


        $filename=Str::random(10).time().'.jpg';
        Storage::disk('public')->copy('img-02.jpg',$filename);
        DB::table('histoires')->insert([
            'img'=>$filename,
            'year'=>2007,
            'text'=>'The year in which on a été des bonhommes wlh'
        ]);


        $filename=Str::random(10).time().'.jpg';
        Storage::disk('public')->copy('img-03.jpg',$filename);
        DB::table('histoires')->insert([
            'img'=>$filename,
            'year'=>2010,
            'text'=>'The year in which on a été des bonhommes wlh'
        ]);


        $filename=Str::random(10).time().'.jpg';
        Storage::disk('public')->copy('img-04.jpg',$filename);
        DB::table('histoires')->insert([
            'img'=>$filename,
            'year'=>2013,
            'text'=>'The year in which on a été des bonhommes wlh'
        ]);
    }
}
