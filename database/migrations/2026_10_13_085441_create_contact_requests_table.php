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
        Schema::create('contact_requests', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('company')->nullable();

            $table->string('project_type');
            $table->string('budget')->nullable();

            $table->text('message');

            $table->string('locale', 2)->default('en');
            $table->boolean('consent')->default(false);

            $table->string('status')->default('new');

            $table->timestamps();

            $table->index('email');
            $table->index('status');
            $table->index('locale');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_requests');
    }
};
