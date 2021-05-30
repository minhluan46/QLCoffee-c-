<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_accounts', function (Blueprint $table) {
            $table->char('id', 10);
            $table->string('ten', 50);
            $table->string('email', 50);
            $table->string('diachi');
            $table->string('gioitinh', 5);
            $table->date('ngaysinh');
            $table->string('anhdaidien', 50);
            $table->char('id_taikhoan', 10);
            $table->tinyInteger('trangthai');
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id_taikhoan')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_accounts');
    }
}
