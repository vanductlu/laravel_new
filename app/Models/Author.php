<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function books()
    {
        return $this->hasMany(Book::class);
    }
    public static function boot()
    {
        parent::boot();

        // Sử dụng sự kiện "deleting" để xử lý việc xóa các bản ghi liên quan trong bảng 'books'
        static::deleting(function ($author) {
            $author->books()->delete();
        });
    }
    
}

