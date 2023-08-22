<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Announce extends Model
{
    use HasFactory, Searchable;
    protected $fillable = [
        'title', 'description', 'price', 'img', 'user_id', 'category_id'
    ];

    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category' => $category,
        ];
        return $array;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public static function toBeRevisionedCount()
    {
        return Announce::where("is_accepted", false)->count();
    }

    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }
}
