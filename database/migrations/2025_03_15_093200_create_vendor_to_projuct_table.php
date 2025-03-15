<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorToProjuctTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_to_projuct', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('categary_id');
            $table->foreign('categary_id')->references('id')->on('categaries')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::table('vendor_to_projuct', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Drop foreign key constraint
            $table->dropColumn('uset_id');    // Drop column
        });
        Schema::table('vendor_to_projuct', function (Blueprint $table) {
            $table->dropForeign(['product_id']); // Drop foreign key constraint
            $table->dropColumn('product_id');    // Drop column
        });
        Schema::table('vendor_to_projuct', function (Blueprint $table) {
            $table->dropForeign(['categary_id']); // Drop foreign key constraint
            $table->dropColumn('categary_id');    // Drop column
        });
        Schema::dropIfExists('vendor_to_projuct');
    }
}
