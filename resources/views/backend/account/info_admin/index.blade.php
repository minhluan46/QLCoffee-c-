@extends('layouts.backend_layout')
@section('content')
 <div class="main_content_iner ">

<form class="add-form" method="POST" action="" enctype="multipart/form-data">
    <div class="btn-pm">
        <div class="mb-3 btn-1">
                        <a class="btn btn-success" href="#"><span class="btn-label"><i class="fa fa-plus"></i></span>Lưu</a>
                        <a class="btn btn-danger" href="#"><span class="btn-label"><i class="fa fa-times"></i></span>Thoát</a>
        </div>
</div>
<div class="row">
  <div class="col-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Thông Tin Admin</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Tài Khoản">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Họ Tên">
                                    </div>
                                </div>
                         
                                 <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Mật Khẩu">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Email">
                                    </div>
                                </div>
                                       <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="date" placeholder="Ngày Sinh">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Điện Thoại">
                                    </div>
                                </div>
                               
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Địa Chỉ">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <select class="nice_Select2 nice_Select_line wide" style="display: none;">
                                        <option value="1">Giới Tính</option>
                                        <option value="1">Nam</option>
                                        <option value="1">Nữ</option>
                                    </select>
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