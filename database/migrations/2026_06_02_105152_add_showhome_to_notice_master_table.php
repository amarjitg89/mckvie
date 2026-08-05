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
        Schema::table('notice_master', function (Blueprint $table) {
            $table->after("department_slug",function($table){
                $table->tinyInteger("show_on_home")->default(0)->comment("0=Hide,1=Show");
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notice_master', function (Blueprint $table) {
            $table->dropColumn("show_on_home");
        });
    }
};
