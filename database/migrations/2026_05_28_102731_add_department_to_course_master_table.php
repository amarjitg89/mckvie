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
        Schema::table('course_master', function (Blueprint $table) {
            $table->after('course_slug',function ($table) {                
                $table->text('department_slug');
                $table->text('course_details');
                $table->text('course_img');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course_master', function (Blueprint $table) {
            $table->dropColumn('course_details');
            $table->dropColumn('department_slug');
            $table->dropColumn('course_img');
        });
    }
};
