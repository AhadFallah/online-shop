<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ptype_seller', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->constrained('sellers');
            $table->foreignId('ptype_id')->constrained('ptypes');
            $table->json('context');
            $table->string('color');
            $table->bigInteger('number');
            $table->string('size')->nullable();
            $table->decimal('price');
            $table->integer('commission');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptype_sellers');
    }
};
