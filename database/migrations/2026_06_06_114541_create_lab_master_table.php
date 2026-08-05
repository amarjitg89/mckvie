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
        Schema::create('lab_master', function (Blueprint $table) {
            $table->id();
            $table->string("title",150);
            $table->text("lab_image");
            $table->tinyInteger("active")->default(1)->comment("1=Active,0=Inactive");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_master');
    }
};
