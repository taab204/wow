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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->nullable();
            $table->string('name')->nullable();
            $table->string('cel')->nullable();
            $table->string('email')->nullable();
            $table->string('dname')->nullable();
            $table->string('dcel')->nullable();
            $table->string('fdni')->nullable();
            $table->string('fdni1')->nullable();
            $table->string('frecib')->nullable();
            $table->string('grab')->nullable();
            $table->string('ceval')->nullable();
            $table->string('direc')->nullable();
            $table->string('dref')->nullable();
            $table->string('tserv')->nullable();
            $table->string('dserv')->nullable();
            $table->string('depart')->nullable();
            $table->string('provin')->nullable();
            $table->string('distri')->nullable();
            $table->string('cel2')->nullable();
            $table->string('lnac')->nullable();
            $table->string('fnac')->nullable();
            $table->string('np')->nullable();
            $table->string('nm')->nullable();
            $table->string('codinst')->nullable();
            $table->string('finst')->nullable();
            $table->string('obs')->nullable();
            $table->string('id_estado')->nullable();
            $table->string('id_provi')->nullable();
            $table->string('id_plan')->nullable();
            $table->string('id_admin')->nullable();
            $table->string('id_area')->nullable();
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
        Schema::dropIfExists('clientes');
    }
};
