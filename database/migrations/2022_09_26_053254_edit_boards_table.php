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
        Schema::table('boards', function (Blueprint $table) {
            $table->integer('id_user')->nullable()->change();
            $table->integer('id_company')->nullable();
            $table->integer('delivery_type_id');
            $table->boolean('auction_status')->default(false);
            $table->boolean('exchange_status')->default(false);
            $table->boolean('new_product')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
