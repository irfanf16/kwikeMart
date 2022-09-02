<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('image');
            $table->float('price');
            $table->integer('discount');
            $table->float('discount_price');
            $table->string('unit');
            $table->string('items_per_unit');
            $table->string('weight');
            $table->integer('min_order')->default(1);
            $table->string('ingredients')->nullable();
            $table->string('allergen_information')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('storage_conditions')->nullable();
            $table->string('expiration_date')->nullable();
            $table->text('disclaimer')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('is_18_plus')->default(0);
            $table->string('is_featured')->default(0);
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
