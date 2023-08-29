<?php

namespace App\Models;
use App\Models\Announcements;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function announcement(){
        return $this->belongsTo(Announcements::class);

    }
}
