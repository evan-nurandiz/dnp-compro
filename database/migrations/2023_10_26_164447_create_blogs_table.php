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
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('blog_id');
            $table->string('blog_title')->unique();
            $table->string('blog_thumbnail');
            $table->longText('blog_body');
            $table->string('blog_created_by');
            $table->string('read_time');
            $table->string('blog_slug');
            $table->integer('blog_like')->default(0);
            $table->integer('blog_view')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
