<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index() {
    	$category = Category::where('trangthai',1)->get();
        $size = Size::where('trangthai',1)->get();
    	$product = Product::orderby('stt')->get();
        $viewData = [
            'category' => $category,
            'product' => $product,
            'size' => $size
        ];
    	return view('backend.product.index', $viewData);
    }
    public function addProduct() {
    	$category = Category::where('trangthai',1)->get();
        $size = Size::where('trangthai',1)->get();
        $viewData = [
            'category' => $category,
            'size' => $size
        ];
    	return view('backend.product.add_product', $viewData);
    }


     public function getData(){

     $product = Product::orderbyDesc('stt')->get();
     if (count($product) > 0) {
        $output = "";
        $url = asset('uploads/product');
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
     return $output;

 }

}
    public function add(ProductRequest $request) {
        $string = ['AA','BB','CC','DD','EC','AS','FG'];
        $ID = $string[mt_rand(0,6)]
        .Carbon::now('Asia/Ho_Chi_Minh')->second
        .Carbon::now('Asia/Ho_Chi_Minh')->day
        .Carbon::now('Asia/Ho_Chi_Minh')->month
        .((Carbon::now('Asia/Ho_Chi_Minh')->year)%100);
    	 // $data = $request->except('_token');// 
        $data['id'] = $ID;
        $data['id_category'] = $request->category;
    	$data['ten'] = $request->ten;
        $data['soluong'] = $request->soluong;
        $data['ngaysanxuat'] = $request->ngaysx;
        $data['ngayhethan'] = $request->hansd;
        $data['id_size'] = $request->size;
    	$data['mota'] = $request->mota;
    	$data['noidung'] = $request->noidung;
    	$data['stt'] = $request->stt;
    	$data['gia'] = $request->gia;
        $img = $request->file('hinhanh');
        if ($img) {
            $name = $img->getClientOriginalName();
            $newImage = $name.rand(1,99).'.'.$img->getClientOriginalExtension();
            $img->move('/uploads/product', $newImage);
            $data['hinhanh'] = $newImage;
        }
        if (empty($request->hienthi)) {
            $data['trangthai'] = 0;
        }else {
            $data['trangthai'] = $request->hienthi;
        }
         if (empty($request->noibat)) {
            $data['mathe'] = 0;
        }
         $product = Product::create($data);
    	if($product){
    	}
    	 return redirect()->back();	

    }

    public function delProduct($id){
        Product::where('id', $id)->delete();

        return redirect()->back();
    }
    public function editProduct($id){
         $product = Product::find($id);
         $category = Category::where('trangthai', 1)->get();
        $size = Size::where('trangthai',1)->get();
         $viewData = [
            'product' => $product,
            'category' => $category,
            'size' => $size
        ];
        return view('backend.product.edit_product', $viewData);
    }
    public function edit($id, ProductRequest $request){
         $data = $request->except('_token');// 
        $data['id_category'] = $request->category;
        $data['ten'] = $request->ten;
        $data['soluong'] = $request->soluong;
        $data['ngaysanxuat'] = $request->ngaysx;
        $data['ngayhethan'] = $request->hansd;
        $data['id_size'] = $request->size;
        $data['mota'] = $request->mota;
        $data['noidung'] = $request->noidung;
        $data['stt'] = $request->stt;
        $data['gia'] = $request->gia;
        $img = $request->file('hinhanh');
        if ($img) {
            $name = $img->getClientOriginalName();
            $newImage = $name.rand(1,99).'.'.$img->getClientOriginalExtension();
            $img->move('uploads/product', $newImage);
            $data['hinhanh'] = $newImage;
        }
        if (empty($request->hienthi)) {
            $data['trangthai'] = 0;
        }else {
            $data['trangthai'] = $request->hienthi;
        }
         if (empty($request->noibat)) {
            $data['mathe'] = 0;
        }
        Product::find($id)->update($data);
        return redirect()->route('get.product');
    }
        public function delAll(Request $request) {
        $del = $request->data;
        if (isset($del) && count($del)) {
            foreach ($del as $value) {
             $data['trangthai'] = 0;   
             Product::where('id', $value)->update($data);     
         } 
         return $del;

     }
 }
 public function upStatus(Request $request) {    
    if (isset($request->data)) {
        $trangthai = ($request->status == 1) ? 0 : 1;
        $data = Product::find($request->data);
        $data->trangthai = $trangthai;
        $data->save();
        return $data->trangthai;
    }
}
 public function edSTT(Request $request) {
    if (isset($request->data)) {
        $data['stt'] = $request->dStt;
        Product::where('id', $request->data)->update($data); 
    }

 }
}

