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
        Schema::create('anime', function (Blueprint $table) {
            $table->id();
            $table->string('RU_Title');
            $table->string('Romanji_Title');
            $table->string('Poster');
            $table->string('Description');
            $table->string('Status');
            $table->string('Type');
            $table->string('Year');
            $table->string('Age_limit');
            $table->string('Studio');
            $table->string('Genres');
            $table->string('Episodes');
            $table->string('Dubbers');
            $table->string('Timer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime');
    }
};
