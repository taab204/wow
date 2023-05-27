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
        Schema::create('empresa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_impuesto')->nullable();
            $table->string('porcentaje_impuesto')->nullable();
            $table->decimal('simbolo_moneda',8,2);
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('top_bar_cel')->nullable();
            $table->string('top_bar_email')->nullable();
            $table->string('footer_address')->nullable();
            $table->string('footer_cel')->nullable();
            $table->string('footer_email')->nullable();
            $table->string('copyright')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('theme_color_1')->nullable();
            $table->string('theme_color_2')->nullable();
            $table->string('analytic_id')->nullable();
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
        Schema::dropIfExists('empresa');
    }
};
