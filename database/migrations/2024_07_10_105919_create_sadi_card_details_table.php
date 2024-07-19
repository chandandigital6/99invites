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
        Schema::create('sadi_card_details', function (Blueprint $table) {
            $table->id();
            $table->string('haldi_image')->nullable();
            $table->text('haldi_title')->nullable();
            $table->text('haldi_msg')->nullable();
            $table->text('haldi_date_time')->nullable();
            $table->text('haldi_venue')->nullable();

            $table->string('mehndi_image')->nullable();
            $table->text('mehndi_title')->nullable();
            $table->text('mehndi_msg')->nullable();
            $table->text('mehndi_date_time')->nullable();
            $table->text('mehndi_venue')->nullable();

            $table->string('sangeet_image')->nullable();
            $table->text('sangeet_title')->nullable();
            $table->text('sangeet_msg')->nullable();
            $table->text('sangeet_date_time')->nullable();
            $table->text('sangeet_venue')->nullable();

            $table->string('barat_image')->nullable();
            $table->text('barat_title')->nullable();
            $table->text('barat_msg')->nullable();
            $table->text('barat_date_time')->nullable();
            $table->text('barat_venue')->nullable();


            $table->string('vidai_image')->nullable();
            $table->text('vidai_title')->nullable();
            $table->text('vidai_msg')->nullable();
            $table->text('vidai_date_time')->nullable();
            $table->text('vidai_venue')->nullable();


            $table->string('reception_image')->nullable();
            $table->text('reception_title')->nullable();
            $table->text('reception_msg')->nullable();
            $table->text('reception_date_time')->nullable();
            $table->text('reception_venue')->nullable();

            $table->text('child_msg')->nullable();

            $table->string('f_family_title_name')->nullable();
            $table->text('f_family_member_name')->nullable();
            $table->text('f_contact_details')->nullable();
            $table->text('f_map_location')->nullable();


            $table->string('m_family_title_name')->nullable();
            $table->text('m_family_member_name')->nullable();
            $table->text('m_contact_details')->nullable();
            $table->text('m_map_location')->nullable();


            $table->foreignId('sadiCard_id')->nullable()->constrained('sadi_cards')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sadi_card_details');
    }
};
