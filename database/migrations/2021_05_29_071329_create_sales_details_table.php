<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_details', function (Blueprint $table) {
            $table->char('id_masp', 10);
            $table->char('id_khuyenmai', 10);
            $table->char('phantramgiam', 3);
            $table->char('tienduocgiam', 10);
            $table->timestamps();

            $table->foreign('id_masp')->references('id')->on('products');
            $table->foreign('id_khuyenmai')->references('id')->on('sales');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_details');
    }
}
