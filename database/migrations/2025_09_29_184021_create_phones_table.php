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
        Schema::create('phones', function (Blueprint $table) {
            $table->id('id_phone'); // Clave primaria
            $table->string('phone_brand', 100);
            $table->string('phone_model', 100);
            $table->double('phone_price')->default(0);
            $table->integer('phone_display_size')->nullable();
            $table->boolean('phone_is_smartphone')->default(true);
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
