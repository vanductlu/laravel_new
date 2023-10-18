<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Author;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Lấy danh sách ID của tất cả các tác giả
        $authorIds = Author::pluck('id')->all();

        // Tạo 100 bản ghi giả lập trong bảng books
        for ($i = 0; $i < 100; $i++) {
            $book = new Book();
            $book->author_id = $faker->randomElement($authorIds);
            $book->title = $faker->sentence(5);
            $book->save();
        }
    }
}
