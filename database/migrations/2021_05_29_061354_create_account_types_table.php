<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_types', function (Blueprint $table) {
            $table->char('id', 10);
            $table->string('tenloai', 50);
            $table->string('chinhanh',50);
            $table->tinyInteger('trangthai');
            $table->timestamps();
            $table->primary('id');
            $table->foreign('chinhanh')->references('id')->on('stores'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_types');
    }
}
