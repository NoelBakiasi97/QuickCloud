<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CarouselSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(HistoireTableSeeder::class);
         $this->call(DomainSeeder::class);
         $this->call(TestimonialSeeder::class);
         $this->call(ContactSeeder::class);
    }
}
