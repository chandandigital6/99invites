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
        Schema::create('birthday_cards', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->text('address')->nullable();
            $table->text('datetime')->nullable();
            $table->text('other')->nullable();
            $table->string('other_image')->nullable();
            $table->foreignId('cardType_id')->nullable()->constrained('card_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('birthday_cards');
    }
};
