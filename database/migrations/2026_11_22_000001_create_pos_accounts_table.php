<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone', 40);
            $table->timestamps();
        });

        Schema::create('pos_users', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('role');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pos_users');
        Schema::dropIfExists('customers');
    }
};
