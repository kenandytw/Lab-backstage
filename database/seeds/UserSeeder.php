<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


DB::table('admins')->insert([
	['id' => 1,'account' => 'master','password' => md5(123)],

]);


    }
}



