<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTableV2 extends Migration
{
     public function up(): void
{
    /**
     * Run the migrations.
     */
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrtions.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}

