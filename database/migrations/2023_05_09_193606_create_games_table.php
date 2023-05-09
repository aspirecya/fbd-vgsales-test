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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('platform');
            $table->string('release_year');
            $table->string('genre');
            $table->string('publisher');
            $table->unsignedInteger('rank');
            $table->unsignedInteger('na_sales');
            $table->unsignedInteger('eu_sales');
            $table->unsignedInteger('jp_sales');
            $table->unsignedInteger('other_sales');
            $table->unsignedInteger('global_sales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
