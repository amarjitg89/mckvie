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
        Schema::create('success_stories_master', function (Blueprint $table) {
            $table->id();
            $table->string("student_name",150);
            $table->text("image_name");
            $table->string("designation",150)->nullable();
            $table->string("company",150)->nullable();
            $table->string("batch",150);
            $table->tinyInteger("active")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('success_stories_master');
    }
};
