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
        Schema::create('grievance_redressal_master', function (Blueprint $table) {
            $table->id();
            $table->string("category",100);
            $table->string("grievance_name",150);
            $table->string("grievance_contact",20);
            $table->string("grievance_email",80);
            $table->string("gender",20);
            $table->string("complaint_category",50);
            $table->text("complaint_details");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grievance_redressal_master');
    }
};
