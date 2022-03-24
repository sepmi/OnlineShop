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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code')->nullable();
            $table->string('description')->nullable();
            $table->boolean('public');
            $table->unsignedBigInteger( 'number_of_uses' )->nullable( );
            $table->unsignedBigInteger('max_number_of_uses');
            $table->unsignedBigInteger('max_number_of_user_uses');
            $table->timestamp('expire_time');
            $table->string('discount_type');
            $table->unsignedBigInteger( 'discount_amount_percentage')->nullable();
            $table->unsignedBigInteger( 'discount_amount_amount' )->nullable();
            $table->timestamp( 'starts_at' )->nullable();
            $table->timestamp( 'expires_at' )->nullable();
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
        Schema::dropIfExists('discounts');
    }
};
