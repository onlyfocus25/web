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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('secondary_education');
            $table->string('form_4_index_number');
            $table->string('level_applying');
            $table->string('email')->unique();
            $table->string('full_name')->nullable()->change(); // Allow null values
            $table->string('disability')->nullable()->change(); // Allow null values
            $table->date('date_of_birth')->nullable()->change(); // Use nullable() instead of default 'null'
            $table->string('gender')->nullable()->change(); // Allow null values
            $table->string('nationality')->nullable()->change(); // Allow null values
            $table->string('permanent_address')->nullable()->change(); // Allow null values
            $table->string('kin_full_name')->nullable()->change(); // Allow null values
            $table->string('kin_mobile')->nullable()->change(); // Allow null values
            $table->string('kin_email')->unique()->nullable()->change(); // Allow null values
            $table->timestamp('email_verified_at')->nullable()->change();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
