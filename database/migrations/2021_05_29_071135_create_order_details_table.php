<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->char('id_hoadon', 10);
            $table->char('id_sanpham', 10);
            $table->tinyInteger('soluong');
            $table->char('tonggia', 10);
            $table->char('tongtien', 10);
            $table->timestamps();

            $table->foreign('id_hoadon')->references('id')->on('orders');
            $table->foreign('id_sanpham')->references('id')->on('products');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
