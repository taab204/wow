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
        Schema::create('reniecs', function (Blueprint $table) {
            $table->id();
            $table->string('ap_pat')->nullable();
            $table->string('ap_mat')->nullable();
            $table->string('nombres')->nullable();
            $table->string('fecha_nac')->nullable();
            $table->string('fch_inscripcion')->nullable();
            $table->string('fch_emision')->nullable();
            $table->string('fch_caducidad')->nullable();
            $table->string('ubigeo_nac')->nullable();
            $table->string('ubigeo_dir')->nullable();
            $table->string('direccion')->nullable();
            $table->string('sexo')->nullable();
            $table->string('est_civil')->nullable();
            $table->string('dig_ruc')->nullable();
            $table->string('madre')->nullable();
            $table->string('padre')->nullable();
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
        Schema::dropIfExists('reniecs');
    }
};
