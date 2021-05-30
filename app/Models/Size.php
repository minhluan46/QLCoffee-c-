<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    public $incrementing = false;
    protected $fillable = ['id','ten','trangthai'];

        public function product(){
            return $this->hasMany('App\Models\Product', 'id');
        }
}
