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
        $inventory = new Inventory();
        $inventory->name = "Linment";
        $inventory->type = "Medicine";
        $inventory->location = "Lab";
        $inventory->x_ref = "x_ref";
        $inventory->quantity = 50;
        $inventory->request_on = Carbon::now();
        $inventory->requested_by = 'Henry Lyamuya';

        $inventory->save();

        $inventory = new Inventory();
        $inventory->name = "Cotton";
        $inventory->type = "Medicine";
        $inventory->location = "Lab";
        $inventory->x_ref = "x_ref";
        $inventory->quantity = 50;
        $inventory->request_on = Carbon::now();
        $inventory->requested_by = 'Matias Mhando';
        $inventory->save();

        $inventory = new Inventory();
        $inventory->name = "Iodine";
        $inventory->type = "Medicine";
        $inventory->location = "Lab";
        $inventory->x_ref = "x_ref";
        $inventory->quantity = 50;
        $inventory->request_on = Carbon::now();
        $inventory->requested_by = 'Gordon Nchy';
        $inventory->save();

        $inventory = new Inventory();
        $inventory->name = "Pain Killers";
        $inventory->type = "Medicine";
        $inventory->location = "Lab";
        $inventory->x_ref = "x_ref";
        $inventory->quantity = 50;
        $inventory->request_on = Carbon::now();
        $inventory->requested_by = 'Micheal Mzanda';
        $inventory->save();

        $inventory = new Inventory();
        $inventory->name = "Sissors";
        $inventory->type = "Medicine";
        $inventory->location = "Lab";
        $inventory->x_ref = "x_ref";
        $inventory->quantity = 50;
        $inventory->request_on = Carbon::now();
        $inventory->requested_by = 'Dela Dela';
        $inventory->save();

        $inventory = new Inventory();
        $inventory->name = "syringes";
        $inventory->type = "Medicine";
        $inventory->location = "Lab";
        $inventory->x_ref = "x_ref";
        $inventory->quantity = 50;
        $inventory->request_on = Carbon::now();
        $inventory->requested_by = 'Hawa Ally';
        $inventory->save();
    }
}
