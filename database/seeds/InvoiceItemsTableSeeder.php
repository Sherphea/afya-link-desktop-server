<?php

use App\Inventory;
use App\InvoiceItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class InvoiceItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoice = new InvoiceItem();
        $invoice->purchase_cost = 3000000.00;
        $invoice->vendor_item_number = "FG12";
        $invoice->quantity = 233;
        $invoice->serial_lot_number = "81786912bf";
        $invoice->expiration_date = Carbon::now();

        $inventory = Inventory::find(1);
        $inventory->invoiceItem()->save($invoice);

        $invoice = new InvoiceItem();
        $invoice->purchase_cost = 3000000.00;
        $invoice->vendor_item_number = "FG12";
        $invoice->quantity = 233;
        $invoice->serial_lot_number = "81786912bf";
        $invoice->expiration_date = Carbon::now();

        $inventory = Inventory::find(2);
        $inventory->invoiceItem()->save($invoice);
        

        $invoice = new InvoiceItem();
        $invoice->purchase_cost = 3000000.00;
        $invoice->vendor_item_number = "FG12";
        $invoice->quantity = 233;
        $invoice->serial_lot_number = "81786912bf";
        $invoice->expiration_date = Carbon::now();

        $inventory = Inventory::find(3);
        $inventory->invoiceItem()->save($invoice);
        

        $invoice = new InvoiceItem();
        $invoice->purchase_cost = 3000000.00;
        $invoice->vendor_item_number = "FG12";
        $invoice->quantity = 233;
        $invoice->serial_lot_number = "81786912bf";
        $invoice->expiration_date = Carbon::now();

        $inventory = Inventory::find(4);
        $inventory->invoiceItem()->save($invoice);

        $invoice = new InvoiceItem();
        $invoice->purchase_cost = 3000000.00;
        $invoice->vendor_item_number = "FG12";
        $invoice->quantity = 233;
        $invoice->serial_lot_number = "81786912bf";
        $invoice->expiration_date = Carbon::now();

        $inventory = Inventory::find(5);
        $inventory->invoiceItem()->save($invoice);

        $invoice = new InvoiceItem();
        $invoice->purchase_cost = 3000000.00;
        $invoice->vendor_item_number = "FG12";
        $invoice->quantity = 233;
        $invoice->serial_lot_number = "81786912bf";
        $invoice->expiration_date = Carbon::now();

        $inventory = Inventory::find(6);
        $inventory->invoiceItem()->save($invoice);
    }
}
