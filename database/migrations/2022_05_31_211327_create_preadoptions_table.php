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
        Schema::create('preadoptions', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_solic');
            $table->enum("estado_masc",["Adoptada","Proceso preadocpion"]);
            $table->unsignedBigInteger('id_pet')->nullable();
            $table->foreign('id_pet')->references('id')->on('pets')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('preadoptions');
    }
};
