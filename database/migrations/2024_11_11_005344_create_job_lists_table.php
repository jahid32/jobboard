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
        Schema::create('job_lists', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->string('employment_type', 50);
            $table->string('company_name', 100);
            $table->string('company_logo');
            $table->string('role', 100);
            $table->string('apply_url');
            $table->text('description');
            $table->string('salary', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_lists');
    }
};
