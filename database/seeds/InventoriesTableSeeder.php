<?php

use App\Inventory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class InventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = new Inventory();
        $patient->name = "Linment";
        $patient->quantity = 50;
        $patient->request_on = Carbon::now();
        $patient->requested_by = 'Henry Lyamuya';
        $patient->save();

        $patient = new Inventory();
        $patient->name = "Cotton";
        $patient->quantity = 50;
        $patient->request_on = Carbon::now();
        $patient->requested_by = 'Matias Mhando';
        $patient->save();

        $patient = new Inventory();
        $patient->name = "Iodine";
        $patient->quantity = 50;
        $patient->request_on = Carbon::now();
        $patient->requested_by = 'Gordon Nchy';
        $patient->save();

        $patient = new Inventory();
        $patient->name = "Pain Killers";
        $patient->quantity = 50;
        $patient->request_on = Carbon::now();
        $patient->requested_by = 'Micheal Mzanda';
        $patient->save();

        $patient = new Inventory();
        $patient->name = "Sissors";
        $patient->quantity = 50;
        $patient->request_on = Carbon::now();
        $patient->requested_by = 'Dela Dela';
        $patient->save();

        $patient = new Inventory();
        $patient->name = "syringes";
        $patient->quantity = 50;
        $patient->request_on = Carbon::now();
        $patient->requested_by = 'Hawa Ally';
        $patient->save();
    }
}
