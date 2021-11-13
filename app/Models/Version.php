<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'versions';
    protected $fillable = [
       'number', 'stage'
    ];
    public $timestamps = true;

    public function content(){
        return $this->belongsToMany(Content::class, 'version_content', 'version_id', 'content_id');
    }
}