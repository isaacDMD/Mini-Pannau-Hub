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
        Schema::create('pannaus', function (Blueprint $table) {
            $table->id();
            $table->string('code_pannau');
            $table->string('zone');
            $table->decimal('prix_mensuel');
            $table->boolean('occupe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pannaus');
    }
};
