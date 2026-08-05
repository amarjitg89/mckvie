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
        Schema::create('student_acheivement_master', function (Blueprint $table) {
            $table->id();
            $table->text("course_slug");
            $table->string("student_name",120);
            $table->string("batch",120)->nullable();
            $table->text("description");
            $table->tinyInteger("active")->default(1)->comment("1=Active,0=Inactive");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_acheivement_master');
    }
};
