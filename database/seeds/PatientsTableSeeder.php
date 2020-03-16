<?php

use App\Patient;
use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = new Patient();
        $patient->patient_no = "1889032";
        $patient->first_name = "Ally";
        $patient->second_name = "Masoud";
        $patient->last_name = "Mohamed";
        $patient->gender = "Male";
        $patient->date_of_birth = Carbon::now();
        $patient->approximate_DOB = true;
        $patient->patient_type = "Private";
        
        $patient->save();
    }

}
