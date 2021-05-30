<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class SearchController extends Controller
{
  public function searchCategory(Request $request) {
   $keyword = strtolower($request->data);
   $category = Category::where('tenloai','like', '%'.$keyword.'%')
   ->orWhere('tenloai','like', $keyword.'%')
   ->orWhere('tenloai','like', '%'.$keyword)
   ->get();
   $output = "";
   if (count($category) > 0) {
    foreach($category as $key => $value) {
     $trangthai = ($value->trangthai == 1) ? "checked" : "";
     $output.='<tr>
         <td>  <div class="custom-control custom-checkbox">
         <input type="checkbox" class="custom-control-input checkitem" id="'.'del'.$key.'" data-parsley-multiple="groups" data-parsley-mincheck="2" 
         name="delAll[]"
         value="'.$value->id.'"
         />
         <label class="custom-control-label" for="'.'del'.$key.'"></label>
         </div></td>
         <td> <a href="#">'.$value->tenloai.'</a></td>
         <td> <a class="line-3" href="">'.$value->mota.'</a></td>
         <td>
         <div class="checkbox_wrap d-flex align-items-center">
         <label class="lms_checkbox_1" for="'.'ht'.$key.'">
         <input type="checkbox" class="checkStatus"  name="status" data-status ="'.$value->trangthai.'" id="'.'ht'.$key.'"' 
         .$trangthai.'
         value="'.$value->id.'" "
         >
         <div class="slider-check round"></div>
         </label>
         </div>
         </td>
         <td>
         <div class="action_btns d-flex">
         <a href=" route("edit.category",'.$value->id.')" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
         <a href=" route("del.category",'. $value->id.')" class="action_btn"> <i class="fas fa-trash"></i> </a>
         </div>
         </td>

         </tr>';
   }
 }

 return $output;

}
public function searchProduct(Request $request) {
   $keyword = strtolower($request->data);
   $product = Product::where('ten','like', '%'.$keyword.'%')
   ->orWhere('ten','like', $keyword.'%')
   ->orWhere('ten','like', '%'.$keyword)
   ->get();
   $output = "";
   $url = asset('uploads/product');
   if (count($product) > 0) {
    foreach($product as $key => $value) {
     $trangthai = ($value->trangthai == 1) ? "checked" : "";
     $output.='<tr>
         <td>  <div class="custom-control custom-checkbox">
         <input type="checkbox" class="custom-control-input checkitem" id="'.'del'.$key.'" data-parsley-multiple="groups" data-parsley-mincheck="2" 
         name="delAll[]"
         value="'.$value->id.'"
         />
         <label class="custom-control-label" for="'.'del'.$key.'"></label>
         </div></td>
         <td>
         <input type="number" class="stt" data-id='.$value->id.' value='.$value->stt.'  >
         </td>
         <td> <a href="#">'.$value->ten.'</a></td>
         <td> <a href="#"> <img src="'.$url.'/'.$value->hinhanh.'" style="width: 100px; height: 100px; border-radius: 5px;"></a></td>
         <td> <a class="line-3" href="">'.$value->mota.'</a></td>
         <td>
         <div class="custom-control custom-checkbox">
         <input type="checkbox" class="custom-control-input" id="'.'ck'.$key.'" data-parsley-multiple="groups" value = 1 data-parsley-mincheck="2"  />
         <label class="custom-control-label" for="'. 'ck'.$key.'"></label>
         </div>
         </td>
         <td>
         <div class="checkbox_wrap d-flex align-items-center">
         <label class="lms_checkbox_1" for="'.'ht'.$key.'">
         <input type="checkbox" class="checkStatus"  name="status" data-status ="'.$value->trangthai.'" id="'.'ht'.$key.'"' 
         .$trangthai.'
         value="'.$value->id.'" "
         >
         <div class="slider-check round"></div>
         </label>
         </div>
         </td>
         <td>
         <div class="action_btns d-flex">
         <a href=" route("edit.category",'.$value->id.')" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
         <a href=" route("del.category",'. $value->id.')" class="action_btn"> <i class="fas fa-trash"></i> </a>
         </div>
         </td>

         </tr>';
   }
 }

 return $output;

}
}
