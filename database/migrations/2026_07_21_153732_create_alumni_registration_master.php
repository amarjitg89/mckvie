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
        Schema::create('alumni_registration_master', function (Blueprint $table) {
            $table->id();
            $table->string("alumni_name",150);
            $table->string("alumni_contact",20);
            $table->string("alumni_email",100);
            $table->text("department_slug");
            $table->date("passing_year");
            $table->string("organisation_name")->nullable();
            $table->string("location",150)->nullable();
            $table->string("designation",120)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_registration_master');
    }
};
