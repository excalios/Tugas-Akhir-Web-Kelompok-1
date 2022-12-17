<?php

namespace App\Models;

use App\Enums\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use function Illuminate\Events\queueable;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'image',
        'category',
        'rating'
    ];

    protected $casts = [
        'category' => Category::class
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        parent::boot();
        static::deleting(queueable(function($post) {
            Storage::disk('public')->delete($post->image);
        }));
    }
}
