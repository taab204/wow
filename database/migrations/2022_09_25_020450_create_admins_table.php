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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('dni')->nullable();
            $table->string('fnaci')->nullable();
            $table->string('foto')->nullable();
            $table->string('address')->nullable();
            $table->string('nbanco')->nullable();
            $table->string('ncuenta')->nullable();
            $table->string('ncontract')->nullable();
            $table->string('fin')->nullable();
            $table->string('fend')->nullable();
            $table->string('ecivil')->nullable();
            $table->string('nhijos')->nullable();
            $table->string('sexo')->nullable();
            $table->string('enoti')->nullable();
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->boolean('status')->default(1);
            $table->string('id_area')->nullable();
            $table->string('rol')->nullable();
            $table->string('token')->nullable();
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
        Schema::dropIfExists('admins');
    }
};
