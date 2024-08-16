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
        Schema::create('file_ptype_seller', function (Blueprint $table) {
            $table->id();
            $table->foreignId("file_id")->constrained('files');
            $table->foreignId('ptypeSellerId')->constraine('ptype_seller');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptype_seller_file');
    }
};
