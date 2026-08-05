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
        Schema::create('event_image_master', function (Blueprint $table) {
            $table->id();
            $table->text('event_slug');
            $table->text('event_image');
            $table->tinyInteger('sequence');
            $table->tinyInteger('active')->default(1)->comment("1=Active,0=Inactive");            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_image_master');
    }
};
