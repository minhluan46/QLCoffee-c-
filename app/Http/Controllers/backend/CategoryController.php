<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Carbon\Carbon;


class CategoryController extends Controller
{
    public function index() {
     $category = Category::all();
     return view('backend.category.index',['category'=>$category]);
 }

 public function getData(){

     $category = Category::all();
     if (count($category) > 0) {
        $output = "";
        $url = asset('public/uploads/category');
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
         <td> <a href="route("edit.category",'.$value->id.')">'.$value->tenloai.'</a></td>
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
     return $output;

 }

}
public function addCategory() {

 return view('backend.category.add_category');
}
public function add(CategoryRequest $request) {
  $string = ['AA','BB','CC','DD','EC','AS','FG'];
  $ID = $string[mt_rand(0,6)]
  .Carbon::now('Asia/Ho_Chi_Minh')->second
  .Carbon::now('Asia/Ho_Chi_Minh')->day
  .Carbon::now('Asia/Ho_Chi_Minh')->month
  .((Carbon::now('Asia/Ho_Chi_Minh')->year)%100);
         // $data = $request->except('_token');// 
  $data['id'] = $ID; 
  $data['tenloai'] = $request->tenloai;
  $data['mota'] = $request->mota; 
if (empty($request->hienthi)) {
    $data['trangthai'] = 0;
}else {
    $data['trangthai'] = $request->hienthi;
}
$category = Category::create($data);
if($category){
}
 return redirect()->back(); 

}
public function delcategory($id){
    Category::where('id', $id)->delete();

    return redirect()->back();
}
public function editcategory($id){
 $category = Category::find($id);
 $viewData = [
    'category' => $category
];
return view('backend.category.edit_category', $viewData);
}
public function edit($id, CategoryRequest $request){
         $data = $request->except('_token');// 
         $data['tenloai'] = $request->tenloai;
         $data['mota'] = $request->mota;
         $img = $request->file('image');
        if (empty($request->hienthi)) {
            $data['trangthai'] = 0;
        }else {
            $data['trangthai'] = $request->hienthi;
        }
        Category::find($id)->update($data);


        return redirect()->route('get.category');
    }
    public function delAll(Request $request) {
        $del = $request->data;
        if (isset($del) && count($del)) {
            foreach ($del as $value) {
             $data['trangthai'] = 0;   
             Category::where('id', $value)->update($data);     
         }   

     }
 }
 public function upStatus(Request $request) {    
    if (isset($request->data)) {
        $trangthai = ($request->status == 1) ? 0 : 1;
        $data = Category::find($request->data);
        $data->trangthai = $trangthai;
        $data->save();
        return $data->trangthai;
    }
}
 public function edSTT(Request $request) {
    if (isset($request->data)) {
        $data['stt'] = $request->dStt;
        Category::where('id', $request->data)->update($data); 
    }

 }
}

