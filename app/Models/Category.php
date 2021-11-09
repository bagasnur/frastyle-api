<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'categories';
    protected $fillable = [
       'category_idn', 'category_eng'
    ];
    public $timestamps = true;

    public function content() {
        return $this->hasMany(Content::class, 'category_id', 'id');
    }
}
