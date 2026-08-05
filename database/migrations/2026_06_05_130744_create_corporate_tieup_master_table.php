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
        Schema::create('corporate_tieup_master', function (Blueprint $table) {
            $table->id();
            $table->text("course_slug");
            $table->text("image_name");
            $table->tinyInteger("active")->default(1)->comment("1=Active,0=Inactive");
            $table->integer("sequence")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corporate_tieup_master');
    }
};
