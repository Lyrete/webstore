<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('description', 1000);
            $table->integer('stock')->default(0); //Default new objects to no stock
            $table->double('price', 8, 2);
            $table->string('barcode', 13); //EAN barcodes are 13 digits, and it's probably easier to deal with them as strings
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
        Schema::dropIfExists('items');
    }
}
