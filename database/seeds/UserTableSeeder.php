<?php

use Illuminate\Database\Seeder;
use App\Student;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student;
        $student->name = 'Demo student';
        $student->email = 'student@click-on.com';
        $student->phone = '07000456456';
        $student->stream = 'Programing & Tech';
        $student->gender = 'Female';
        $student->about = 'i Am the demo student';
        $student->experience = 'I am having such a great time in the click on kaduna program';
        $student->save();
    }
}
