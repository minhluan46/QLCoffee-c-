@extends('layouts.backend_layout')
@section('content')
 <div class="main_content_iner ">
  <div class="container-fluid p-0">
    <div class="row justify-content-center">
      <div class="white_card card_height_100 mb_30 user_crm_wrapper col-12">
        <div class="row">
          <div class="col-lg-3">
            <div class="single_crm">
              <div class="crm_head d-flex align-items-center justify-content-between" >
                <div class="thumb">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <span>Mới Đặt</span>
              </div>
              <div class="crm_body">
                <div class="d-flex align-items-center justify-content-between">
                  <h6>Số Lượng : </h6>
                  <span>20</span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <h6>Tổng Giá : </h6>
                  <span>20VNĐ</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="single_crm">
              <div class="crm_head crm_bg_1 d-flex align-items-center justify-content-between" >
                <div class="thumb">
                  <i class="fas fa-check"></i>
                </div>
                <span>Xác Nhận</span>
              </div>
              <div class="crm_body">
                <div class="d-flex align-items-center justify-content-between">
                  <h6>Số Lượng : </h6>
                  <span>20</span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <h6>Tổng Giá : </h6>
                  <span>20VNĐ</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="single_crm">
              <div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between" >
                <div class="thumb">
                  <i class="fas fa-truck"></i>
                </div>
                <span>Đã Giao</span>
              </div>
              <div class="crm_body">
                <div class="d-flex align-items-center justify-content-between">
                  <h6>Số Lượng : </h6>
                  <span>20</span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <h6>Tổng Giá : </h6>
                  <span>20VNĐ</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="single_crm">
              <div class="crm_head crm_bg_3 d-flex align-items-center justify-content-between" >
                <div class="thumb">
                  <i class="fas fa-trash-alt"></i>
                </div>
                <span>Đã Huỷ</span>
              </div>
              <div class="crm_body">
                <div class="d-flex align-items-center justify-content-between">
                  <h6>Số Lượng : </h6>
                  <span>20</span>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <h6>Tổng Giá : </h6>
                  <span>20VNĐ</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="btn-pm col-12">
      <div class="mb-3 btn-1">
        <a class="btn btn-danger" href=""><span class="btn-label"><i class="fa fa-times"></i></span>Xoá Hết</a>
      </div>
      <div class="serach_field-area d-flex align-items-center mb-3">
        <div class="search_inner">
          <form action="#">
            <div class="search_field">
              <input type="text" placeholder="Search">
            </div>
            <button type="submit"> <img src="{{ asset('public/backend/img/icon/icon_search.svg') }}" alt=""> </button>
          </form>
        </div>
      </div>
    </div>


    <div class="col-xl-12 padding-15">
      <div class="white_card mb_30 dh-search">
        <div class="white_card_header">
          <div class="box_header m-0">
            <div class="main-title">
              <h3 class="m-0">Tìm Kiếm</h3>
            </div>
          </div>

        </div>
        <div class="white_card_body">
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputPassword4">Ngày</label>
              <div class="common_date_picker">
                <input class="datepicker-here  digits" type="text" data-range="true" data-multiple-dates-separator=" - " data-language="vi">
              </div>

          </div>
          <div class="form-group col-md-3">
            <label for="inputPassword4">Tình Trạng</label>
                              <div class="form-group">
                                            <select id="inputState" class="form-control">
                                              <option value="" selected="">Chọn</option>
                                                <option>Mới Đặt</option>
                                                <option >Xác Nhận</option>
                                                <option >Đã Giao</option>
                                                <option >Huỷ</option>
                                            </select>
                                        </div>
            
          </div>

          <div class="form-group col-md-3">
                   <label for="inputPassword4">HTTT</label>
                              <div class="form-group">
                                            <select id="inputState" class="form-control">
                                              <option value="" selected="">Chọn</option>
                                                <option >Trực Tiếp</option>
                                                <option >Khi Nhận</option>
                                                <option >Online</option>
                                            </select>
                                        </div>

          </div>
          <div class="form-group col-md-3">
                   <label for="inputPassword4">Địa Chỉ</label>
                              <div class="form-group">
                                            <select id="inputState" class="form-control">
                                                <option value="" selected="">Chọn</option>
                                                <option >TP. HCM</option>
                                                <option >Hà Nội</option>
                                                <option >Long An</option>
                                            </select>
                                        </div>

          </div>
        </div>
      </div>
         <div class="btn-pm search-dh">
    <div class="mb-3 btn-1">
      <a class="btn btn-success" href="index.php?view=themloaisp"><span class="btn-label"><i class="fas fa-search"></i></span>Tìm Kiếm</a>
    </div>
  </div>
    </div>






    </div>

      <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
          <div class="white_card_header">
            <div class="box_header m-0">
              <div class="main-title">
                <h3 class="m-0">Sản Phẩm</h3>
              </div>
            </div>
          </div>
          <div class="white_card_body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">

                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="horizontalCheckbox" data-parsley-multiple="groups" data-parsley-mincheck="2" />
                        <label class="custom-control-label" for="horizontalCheckbox"></label>
                      </div>
                    </th>
                    <th scope="col">Mã Đơn Hàng</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Ngày Đặt</th>
                    <th scope="col">HTTT</th>
                    <th scope="col">Tổng Giá</th>
                    <th scope="col">Tình Trạng</th>
                    <th scope="col">Thao Tác</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="horizontalCheckbox1" data-parsley-multiple="groups" data-parsley-mincheck="2" />
                      <label class="custom-control-label" for="horizontalCheckbox1"></label>
                    </div></td>
                    <td>DH1</td>
                    <td> <a href="#">PMT</a></td>
                    <td> <a href="#">03:42:43 PM - 15/05/2021</a></td>
                    <td> <a href="">Thanh Toán Khi Nhận</a></td>
                    <td>
                        5000VNĐ
                    </td>
                    <td>
                     Mới Đặt
                  </td>
                  <td>
                    <div class="action_btns d-flex">
                      <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                      <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                    </div>
                  </td>

                </tr>
                     <tr>
                    <td>  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="horizontalCheckbox1" data-parsley-multiple="groups" data-parsley-mincheck="2" />
                      <label class="custom-control-label" for="horizontalCheckbox1"></label>
                    </div></td>
                    <td>DH2</td>
                    <td> <a href="#">PMT 1</a></td>
                    <td> <a href="#">03:42:43 PM - 15/05/2021</a></td>
                    <td> <a href="">Thanh Toán Online</a></td>
                    <td>
                        3000VNĐ
                    </td>
                    <td>
                     Mới Đặt
                  </td>
                  <td>
                    <div class="action_btns d-flex">
                      <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                      <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                    </div>
                  </td>

                </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

  

  </div>
</div>
</div>
</div>
</div>
@stop