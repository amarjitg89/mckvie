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
        Schema::create('faculty_master', function (Blueprint $table) {
            $table->id();
            $table->string("faculty_name",150);
            $table->string("designation",150);
            $table->string("qualification",120);
            $table->string("teaching_exp",20)->nullable();
            $table->string("research_exp",20)->nullable();
            $table->string("industry_exp",20)->nullable();
            $table->date("date_of_joining")->nullable();
            $table->text("faculty_image")->nullable();
            $table->tinyInteger("hod")->default(0)->comment("1=Yes,0=No");
            $table->tinyInteger("active")->default(0)->comment("1=Yes,0=No");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculty_master');
    }
};
