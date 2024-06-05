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
        Schema::table('posts', function (Blueprint $table) {
            //postsテーブルのすべてのカラムにnullableを適用する
            $table->string('title')->nullable()->change();
            $table->text('body')->nullable()->change();
            $table->string('image_book_path')->nullable()->change();
            
            $table->integer('price')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->string('title')->nullable(false)->change();
            $table->text('body')->nullable(false)->change();
            $table->string('image_book_path')->nullable(false)->change();

            $table->integer('price')->nullable(false)->change();

        });
    }
};
