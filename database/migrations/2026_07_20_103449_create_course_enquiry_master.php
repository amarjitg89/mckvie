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
        Schema::create('course_enquiry_master', function (Blueprint $table) {
            $table->id();
            $table->string("enquirer_name",150);
            $table->string("enquirer_contact",20);
            $table->string("enquirer_email",80);
            $table->text("course_slug");
            $table->text("course_enquiry");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_enquiry_master');
    }
};
