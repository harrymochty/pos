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
        Schema::create('order_setting', function (Blueprint $table) {
            $table->id();
            $table->string('name_toko');
            $table->text('alamat')->nullable();
            $table->string('telepon');
            $table->tinyInteger('tipe_nota');
            $table->string('path_logo');
            $table->string('path_kartu_member');
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
        Schema::dropIfExists('order_setting');
    }
};
