<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->char('id', 10);
            $table->string('ten', 50);
            // $table->integer('stt');
            $table->char('giaban',10)->nullable();
            $table->string('hinhanh',50);
            $table->text('mota')->nullable();
            $table->date('ngaysanxuat');
            $table->date('ngayhethan');
            $table->tinyInteger('soluong')->nullable();
            $table->string('mathe', 50)->nullable();
            $table->char('id_size',10)->nullable();
            $table->char('id_category',10)->nullable();
            $table->tinyInteger('trangthai');
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_size')->references('id')->on('sizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
