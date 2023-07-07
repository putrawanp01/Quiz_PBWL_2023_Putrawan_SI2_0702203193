<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id');
            $table->integer('pel_gol_id')->unsigned();
            $table->integer('pel_users_id')->unsigned();
            $table->string('pel_no', 20);
            $table->string('pel_nama', 50);
            $table->text('pel_alamat');
            $table->string('pel_hp', 20);
            $table->timestamps();
        });
        Schema::table('tb_pelanggan', function (Blueprint $table) {
            $table->foreign('pel_gol_id')->references('gol_id')->on('tb_golongan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pel_users_id')->references('users_id')->on('tb_users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};
