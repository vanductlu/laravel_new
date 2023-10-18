<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->unsignedBigInteger('author_id');
        // Thêm cột khóa ngoại author_id

        $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
        // Sử dụng 'onDelete' với giá trị 'cascade' để xóa các bản ghi liên quan tự động
        // Nghĩa là khi xóa một bản ghi trong bảng 'authors', tất cả các bản ghi có 'author_id' tương ứng sẽ bị xóa.
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};