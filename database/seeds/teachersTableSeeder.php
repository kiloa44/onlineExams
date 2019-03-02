<?php

use Illuminate\Database\Seeder;

class teachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Teacher::class,2)->create()->each(function ($teacher){
            $teacher->user()->save(factory(App\User::class)->make());
        });
    }
}
