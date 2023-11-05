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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('full_name')->nullable();
            $table->string('number',11)->unique()->nullable();
            $table->timestamp('number_verified_at')->nullable();
            $table->string('nid_number',20)->unique()->nullable();
            $table->text('address')->nullable();
            $table->string('animal')->nullable();
            $table->string('bird')->nullable();
            $table->string('farmer')->nullable();
            $table->string('licence')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
