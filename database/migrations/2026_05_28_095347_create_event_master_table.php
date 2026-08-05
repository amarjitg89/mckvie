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
        Schema::create('event_master', function (Blueprint $table) {
            $table->id();
            $table->string("event_title",150);
            $table->string("event_slug",180);
            $table->string("course_slug",180);
            $table->text("event_image");
            $table->date("event_date");
            $table->string("event_location",150)->nullable();
            $table->tinyInteger("sequence")->default(0);
            $table->tinyInteger("active")->default(1)->comment("1=Active,0=Inactive");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_master');
    }
};
