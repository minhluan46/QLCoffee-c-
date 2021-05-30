@extends('layouts.backend_layout')
@section('content')
 <div class="main_content_iner ">

   <div class="btn-pm">
    <div class="mb-3 btn-1">
      <a class="btn btn-success" href="{{ route('add.users')}}"><span class="btn-label"><i class="fa fa-plus"></i></span>Thêm Mới</a>
      <a class="btn btn-danger" href=""><span class="btn-label"><i class="fa fa-times"></i></span>Xoá Hết</a>
    </div>
    <div class="serach_field-area d-flex align-items-center mb-3">
      <div class="search_inner">
        <form action="#">
          <div class="search_field">
            <input type="text" placeholder="Search">
          </div>
          <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid p-0">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
          <div class="white_card_header">
            <div class="box_header m-0">
              <div class="main-title">
                <h3 class="m-0">Tài Khoản Người Dùng</h3>
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
                    <th scope="col">STT</th>
                    <th scope="col">Tên Tài Khoản</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Hoạt Động</th>
                    <th scope="col">Thao Tác</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="horizontalCheckbox1" data-parsley-multiple="groups" data-parsley-mincheck="2" />
                      <label class="custom-control-label" for="horizontalCheckbox1"></label>
                    </div></td>
                    <td>1</td>
                    <td> <a href="#">minhtri</a></td>
                    <td> <a href="#">PMTTTTTT</a></td>
                    <td><a href="#">0306181377@caothang.edu.vn</a></td>
                    <td>
                     <div class="checkbox_wrap d-flex align-items-center">
                      <label class="lms_checkbox_1" for="course_1">
                        <input type="checkbox" id="course_1">
                        <div class="slider-check round"></div>
                      </label>
                    </div>
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
                    <td>1</td>
                    <td> <a href="#">minhtri118</a></td>
                    <td> <a href="#">PMTTTTTT1111</a></td>
                    <td><a href="#">0306181377@caothang.edu.vn</a></td>

                    <td>
                     <div class="checkbox_wrap d-flex align-items-center">
                      <label class="lms_checkbox_1" for="course_1">
                        <input type="checkbox" id="course_1">
                        <div class="slider-check round"></div>
                      </label>
                    </div>
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
@stop