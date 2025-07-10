<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->unsignedBigInteger('role_id')->nullable();

            // 7 field wajib (snake_case)
            $table->string('company_code', 20)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('is_deleted')->default(0);
            $table->string('created_by', 32)->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('last_update_by', 32)->nullable();
            $table->dateTime('last_update_date')->nullable();

            // $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};