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
        Schema::table('image_book_path', function (Blueprint $table) {
            //image_book_pathに初期値を設定する
            $table->string('image_book_path')->default('')->change();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('image_book_path', function (Blueprint $table) {
            $table->string('image_book_path')->default(null)->change();

        });
    }
};
