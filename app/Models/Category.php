<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
       public $incrementing = false;
      protected $fillable = ['id','tenloai','mota','trangthai'];

        public function product(){
            return $this->hasMany('App\Models\Product', 'id');
        }
}
