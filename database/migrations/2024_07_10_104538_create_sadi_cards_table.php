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
        Schema::create('sadi_cards', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->text('mantra')->nullable();
            $table->string('m_name')->nullable();
            $table->string('f_name')->nullable();
            $table->text('in_request')->nullable();
            $table->string('data_and_time')->nullable();
            $table->text('venue_address')->nullable();
            $table->text('marriage_to_follow')->nullable();
            $table->foreignId('cardType_id')->nullable()->constrained('card_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sadi_cards');
    }
};
