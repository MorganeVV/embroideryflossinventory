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
        Schema::create('dmc_floss', function (Blueprint $table) {
            $table->string('number')->unique();
            $table->string('name');
            $table->string('hex_code')->unique();
            $table->timestamps();
            
            $table->primary('number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dmc_floss');
    }
};
