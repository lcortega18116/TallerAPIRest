<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('programminglanguages', function (Blueprint $table) {
            $table->increments('language_id');
            $table->string('name', 100)->unique();
            $table->string('creator', 100);
            $table->date('release_date');
            $table->text('description')->nullable();
            $table->decimal('current_version', 5, 2);
            $table->boolean('is_active')->default(true);
            $table->integer('paradigm')->unsigned();
            $table->string('website', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
