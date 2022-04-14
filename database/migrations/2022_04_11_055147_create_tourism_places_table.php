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
        Schema::create('tourism_places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('mainImage');
            $table->string('open');
            $table->string('hours');
            $table->string('ticket');
            $table->text('description');
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
        Schema::dropIfExists('tourism_places');
    }
};
