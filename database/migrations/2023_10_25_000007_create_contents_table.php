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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id')->default(1);
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('slug');
            $table->text('resume')->nullable();
            $table->text('body')->nullable();
            $table->text('description')->nullable();
            $table->string('author')->nullable();
            $table->string('img_default')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
