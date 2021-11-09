<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tags';
    protected $fillable = [
       'name', 'tag_alt'
    ];
    public $timestamps = true;

    public function konten(){
        return $this->belongsToMany(Content::class, 'tag_content', 'tag_id', 'content_id');
    }
}