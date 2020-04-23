<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('type');
            $table->integer('quantity');
            $table->string('location');
            $table->string('aisle_location');
            $table->string('x_ref');
            $table->date('request_on');
            $table->date('date_received');
            $table->string('vendor');
            $table->string('invoice_number');
            $table->string('requested_by');
            $table->boolean('gift_in_kind');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
