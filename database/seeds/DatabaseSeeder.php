<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    // $this->call('PermissionsTableSeeder');
        //$this->call(' ');
       // $this->call('ConnectRelationshipsSeeder');
        // $this->call(UsersTableSeeder::class);
        $this->call(IntialValue::class);
    }
}
