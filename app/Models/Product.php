<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $incrementing = false;
    protected $table = 'products';
    protected $fillable = ['id','stt','ten','giaban','hinhanh','mota','ngaysanxuat','ngayhethan','soluong','noibat','id_size','id_category','trangthai'];

    public function category(){
            return $this->beLongsTo('App\Models\category','id');
        }
    public function size(){
            return $this->beLongsTo('App\Models\size','id');
        }
}
