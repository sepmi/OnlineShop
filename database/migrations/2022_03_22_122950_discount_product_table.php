<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'discount_product', function ( Blueprint $table ) {
            //$table->integer( 'product_id' )->unique( );
            //$table->unsignedBigInteger( 'discount_id' )->unique();

            $table->foreignId('discount_id')->constrained('discounts')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_discount');
    }
};
