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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();

            // Shopify shop domain
            $table->string('shop')->unique();

            // OAuth Access Token
            $table->longText('access_token')->nullable();

            // Shop Information
            $table->string('shop_name')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('currency')->nullable();

            // OAuth scopes granted
            $table->text('scopes')->nullable();

            // Whether app is installed
            $table->boolean('is_installed')->default(true);

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
