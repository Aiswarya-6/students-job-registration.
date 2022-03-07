<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('Admin@123')]
        ]);


        DB::table('student_registration')->insert([
            ['firstName' => 'Aiswarya', 'lastName' => 'R', 'gender' => 'Female' , 'state'=>'Kerala' , 'address'=>'kizhakkethara', 'district'=>'Palakkad']
        ]);

        DB::table('education')->insert([
            ['course' => 'Diploma , SSLC', 'college' => 'st.marys polytechnic college , LFCGHS', 'passOut' => '2016 , 2011' , 'percentage'=>'8.48CGPA , 60%' , 'studentId'=>'1'],
        
        ]);
    }
}
