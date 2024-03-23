<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductDetailIdToReviewsTable extends Migration
{
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->unsignedBigInteger('product_detail_id');
            $table->foreign('product_detail_id')->references('id')->on('product_details')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign(['product_detail_id']);
            $table->dropColumn('product_detail_id');
        });
    }
}
