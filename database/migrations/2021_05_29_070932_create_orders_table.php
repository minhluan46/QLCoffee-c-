<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->char('id', 10);
            $table->date('ngaymua');
            $table->char('dongia', 10);
            $table->char('thanhtien', 10);
            $table->char('id_nguoimua', 10);
            $table->char('id_nguoilap',10);
            $table->tinyInteger('trangthai');
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id_nguoimua')->references('id')->on('accounts');
            $table->foreign('id_nguoilap')->references('id')->on('accounts');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
