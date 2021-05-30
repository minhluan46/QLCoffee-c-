@extends('layouts.backend_layout')
@section('content')
 <div class="main_content_iner ">
<form class="add-form" method="POST" action="{{ route('edit.p.category', $category->id) }}" 
enctype="multipart/form-data">
@csrf 
    <div class="btn-pm">
        <div class="mb-3 btn-1">
                        <button type="submit" class="btn btn-success"><span class="btn-label"><i class="fa fa-plus"></i></span>Lưu</button>
                        <a  class="btn btn-danger" href="{{ route('get.category')}}"><span class="btn-label"><i class="fa fa-times"></i></span>Thoát</a>
        </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Cập Nhật Danh Mục</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                                <div class="form-group form-t">
                                     <div class="form-group form-check">
                                <label class="form-check-label" for="exampleCheck1">Hiển Thị : </label>

                                    <input type="checkbox" name="hienthi"  value='1' class="form-check-input" id="exampleCheck1" {{($category->trangthai == 1) ? 'checked' : '' }}>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="tenloai">Tên Loại</label>
                                    <input type="text" class="form-control"
                                     id="tenloai" name="tenloai" placeholder="Tên Loại" value="{{ $category->tenloai }}">
                                    @if($errors->first('tenloai'))
                                    <small class="text-danger">{{ $errors->first('tenloai') }}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="noidung-pt">Mô Tả</label>
                                    <textarea type="password" class="form-control" name="mota" id="noidungpt" placeholder="Nội Dung"> {{ $category->mota }}</textarea>
                                </div>                           
                        
                        
                        </div>
                    </div>

                               
    </div>
</div>



</form>
    </div>
  </div>
@stop