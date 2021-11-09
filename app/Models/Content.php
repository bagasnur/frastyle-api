<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'contents';
    protected $fillable = [
       'title', 'content_file', 'category_id'
    ];
    public $timestamps = true;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tag(){
        return $this->belongsToMany(Tag::class, 'tag_content', 'content_id', 'tag_id');
    }

    public function version(){
        return $this->belongsToMany(Version::class, 'version_content', 'content_id', 'version_id');
    }
}