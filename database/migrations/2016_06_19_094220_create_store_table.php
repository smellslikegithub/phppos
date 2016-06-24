<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            //
            $table->increments('store_id');
            $table->string('store_name');
            $table->string('store_url');
            $table->string('store_logo'); // stroes the name of the picture


            $table->text('store_terms');
            $table->text('store_return_policy');
            $table->string('sales_iD'); // wether product id or original Number will be shown on the money   reciept
            $table->text('sales_tax');
            $table->string('voucher_title');


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
        Schema::table('store', function (Blueprint $table) {
            //

            //Schema::drop('store');
        });
    }
}
