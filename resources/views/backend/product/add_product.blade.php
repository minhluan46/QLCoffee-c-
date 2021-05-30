@extends('layouts.backend_layout')
@section('content')
<div class="main_content_iner ">
    <form class="add-form" method="POST" action="{{ route('add.p.product')}}" enctype="multipart/form-data">
        @csrf
        <div class="btn-pm">
            <div class="mb-3 btn-1">
              <button type="submit" class="btn btn-success"><span class="btn-label"><i class="fa fa-plus"></i></span>Lưu</button>
              <a  class="btn btn-danger" href="{{ route('get.product')}}"><span class="btn-label"><i class="fa fa-times"></i></span>Thoát</a>
          </div>
      </div>
      <div class="row">
        <div class="col-xl-8">
            <div class="white_card mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Nội Dung Sản Phẩm</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="form-group">
                        <label for="ten">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" id="ten" name="ten" placeholder="Tiêu Đề">
                        @if($errors->first('ten'))
                        <small class="text-danger">{{ $errors->first('ten') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="noidung-pt">Mô Tả</label>
                        <textarea type="password" class="form-control" name="mota" id="noidungpt" placeholder="Nội Dung"></textarea>
                    </div>                                                   

                </div>
            </div>



        </div>
        <div class="col-xl-4">
           <div class="white_card  mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Danh Mục Sản Phẩm</h3>
                    </div>
                </div>
            </div>
            <div class="white_card_body">

              <div class="form-group">
                <label for="inputState">Danh Mục Loại</label>
                <select id="inputState" class="form-control" name="category">
                    @if(count($category))
                    @foreach($category as $value)
                    <option  value="{{ $value->id}}">{{ $value->tenloai}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="inputState">Danh Mục Kích Cỡ</label>
                <select id="inputState" class="form-control" name="size">
                    @if(count($size))
                    @foreach($size as $value)
                    <option  value="{{ $value->id}}">{{ $value->ten}}</option>
                    @endforeach
                    @endif
                </select>
            </div>

        </div>
    </div>
    <div class="white_card  mb_30">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">Hình Ảnh</h3>
                </div>
            </div>
        </div>
        <div class="white_card_body">

            <input type="file" class="image" id="image" name="hinhanh" onchange="UpImg()">
            <div id="displayIMG"></div>
            {{--  @if($errors->first('hinhanh'))
                        <small class="text-danger">{{ $errors->first('hinhanh') }}</small>
                        @endif --}}
        </div>
    </div>
</div>
<div class="col-xl-12 padding-15">
    <div class="white_card mb_30">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">Thông Tin Sản Phẩm</h3>
                </div>
            </div>

        </div>
        <div class="white_card_body">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-2">
                      <div class="form-group row hienthi">
                        <div class="col-sm-6">Hiển Thị</div>
                        <div class="col-sm-6 check-mt">
                            <div class="form-check">
                                <input class="form-check-input" name="hienthi" value=1 type="checkbox" id="gridCheck1" checked>
                                <label class="form-check-label" for="gridCheck1">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-2">
                  <label class="form-check-label1" for="exampleCheck1">STT : </label>

                  <input class="form-control w-50" type="number" name="stt" id="exampleCheck1" value="1">
              </div>

             
            <div class="form-group col-md-4">
                <label for="inputPassword4">Giá</label>
                <input type="number" class="form-control" id="gia" name="gia" placeholder="Giá">
            </div>
             <div class="form-group col-md-4">
                <label for="inputPassword4">Số Lượng</label>
                <input type="number" class="form-control" id="gia" name="soluong" placeholder="Số Lượng">
            </div>
             <div class="form-group col-md-4">
                <label for="inputPassword4">Ngày Sản Xuất</label>
                <input type="date" class="form-control" id="gia" name="ngaysx" placeholder="Ngày Sản Xuất">
            </div>
             <div class="form-group col-md-4">
                <label for="inputPassword4">Hạn Sử Dụng</label>
                <input type="date" class="form-control" id="gia" name="hansd" placeholder="Hạn Sử Dụng">
            </div>

        </div>
    </div>
</div>
</div>
</div>

</div>

</form>
</div>
</div>







@stop