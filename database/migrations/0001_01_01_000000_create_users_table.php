<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('username')->unique();
      $table->string('first_name')->nullable();
      $table->string('last_name')->nullable();
      $table->string('email')->unique();
      $table->string('no_telp')->nullable();
      $table->string('alamat')->nullable();
      $table->string('kecamatan')->nullable();
      $table->string('desa')->nullable();
      $table->string('jabatan')->nullable();
      $table->string('avatar')->nullable();
      $table->string('password');
      $table->enum('role', ['user', 'admin'])->default('user');
      $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
      $table->timestamps();
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