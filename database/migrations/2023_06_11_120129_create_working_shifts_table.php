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
        Schema::create('working_shifts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->time('s_time');
            $table->time('e_time');
            $table->time('g_limit');
            $table->time('o_limit');
            $table->time('r_limit');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('working_shifts');
    }
};
