<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('nama', 64);
            $table->string('nip', 18)->unique();
            $table->string('password');
            $table->string('jabatan', 64);
            $table->string('pangkat_id', 36);
            $table->string('bidang_id', 36);
            $table->string('no_hp', 19);
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
        Schema::dropIfExists('admin');
    }
}
