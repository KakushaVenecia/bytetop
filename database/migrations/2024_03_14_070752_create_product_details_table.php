<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('tags');
            $table->string('brand');
            $table->enum('category', ['Laptops', 'Accessories', 'Computers', 'Monitors', 'All in One Desktops']);
            $table->string('image');
            $table->integer('quantity');
            $table->float('rating')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
