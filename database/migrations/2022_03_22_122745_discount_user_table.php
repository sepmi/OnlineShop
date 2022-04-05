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
        Schema::create( 'discount_user', function ( Blueprint $table ) {
           // $table->unsignedInteger( 'user_id' )->unsigned( );
            //$table->unsignedBigInteger( 'discount_id' );

            $table->foreignId('discount_id')->constrained('discounts');
            $table->foreignid('user_id')->constrained('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_discount');
    }
};
