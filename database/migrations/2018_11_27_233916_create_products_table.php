<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->decimal('price',7,2);
            $table->decimal('sale_price',7,2);
            $table->decimal('cost',7,2);
            $table->integer('vendor_id');
            $table->char('sku', 150);
            $table->text('key_features');
            $table->string('visibility');
            $table->string('Url');  
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('qty');
            $table->text('virtual_product');
            $table->string('position');
            $table->text('warranty_claim');
            $table->integer('package_weight');
            $table->integer('length');
            $table->integer('width');
            $table->integer('height');
            $table->string('battery');
            $table->string('flamable');
            $table->string('Liquid');
            


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
        Schema::dropIfExists('products');
    }
}
