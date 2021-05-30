@extends('layouts.backend_layout')
@section('content')
<div class="main_content_iner ">

 <div class="btn-pm">
  <div class="mb-3 btn-1">
    <a class="btn btn-success" href="{{ route('add.product')}}"><span class="btn-label"><i class="fa fa-plus"></i></span>Thêm Mới</a>
    <a class="btn btn-danger disabled " href="" id="deleleall"><span class="btn-label"><i class="fa fa-times"></i></span>Xoá Hết</a>
  </div>
  <div class="serach_field-area d-flex align-items-center mb-3">
    <div class="search_inner">
      <form action="#">
        <div class="search_field">
          <input type="text" placeholder="Search" id="search-name">
        </div>
        <button type="submit"> <img src="{{ asset('backend/img/icon/icon_search.svg') }}" alt=""> </button>
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
                      <input type="checkbox" class="custom-control-input" id="selectall" data-parsley-multiple="groups" data-parsley-mincheck="2" 
                      name="ischeck" 
                      />
                      <label class="custom-control-label" for="selectall"></label>
                    </div>
                  </th>
                  <th scope="col">STT</th>
                  <th scope="col">Tên</th>
                  <th scope="col">Hình Ảnh</th>
                  <th scope="col" class="tr-mota">Mô Tả</th>
                  <th scope="col">Nổi Bật</th>
                  <th scope="col">Hiển Thị</th>
                  <th scope="col">Thao Tác</th>
                </tr>
              </thead>
              <tbody class="data-pro">
               @if(isset($product) && count($product))
                @foreach($product as $key => $value)

                <tr>
                 <td>  <div class="custom-control custom-checkbox">
                   <input type="checkbox" class="custom-control-input checkitem" id="'del'.{{$key}}" data-parsley-multiple="groups" data-parsley-mincheck="2" 
                   name="delAll[]"
                   value="{{$value->id}}"
                   />
                   <label class="custom-control-label" for="'del'.{{$key}}"></label>
                 </div></td>
                 <td>
                   <input type="number" class="stt" data-id="{{$value->id}}" 
                   value="{{(int)$value->stt}}">
                 </td>
                 <td> <a href="{{route('edit.product',$value->id)}}">{{$value->ten}}</a></td>
                 <td> <a href="{{route('edit.product',$value->id)}}"> <img src="{{  asset('uploads/product/'.$value->hinhanh)}}" style="width: 100px; height: 100px; border-radius: 5px;"></a></td>
                 <td> <a class="line-3" href="{{route('edit.product',$value->id)}}"><?=htmlspecialchars_decode($value->mota)?></a></td>
                 <td>
                   <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" id="'ck'.{{$key}}" data-parsley-multiple="groups" value = 1 data-parsley-mincheck="2"  />
                     <label class="custom-control-label" for="'ck'.{{$key}}"></label>
                   </div>
                 </td>
                 <td>
                   <div class="checkbox_wrap d-flex align-items-center">
                     <label class="lms_checkbox_1" for="ht{{$key}}">
                       <input type="checkbox" class="checkStatus"  name="status" data-status ='{{$value->trangthai}}' id="ht{{$key}}" 
                      {{ ($value->trangthai == 1) ? "checked" : ""}}
                       value="{{$value->id}}"
                       >
                       <div class="slider-check round"></div>
                     </label>
                   </div>
                 </td>
                 <td>
                   <div class="action_btns d-flex">
                     <a href=" {{route('edit.product',$value->id)}}" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                     <a href=" {{route('del.product',$value->id)}}" class="action_btn"> <i class="fas fa-trash"></i> </a>
                   </div>
                 </td>
               </tr>
               @endforeach
               @endif

          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
</div>
</div>
</div>
{{-- thông báo --}} 
   <div class="modal fade" id="updateS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Thông Báo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Cập Nhật Dữ Liệu Thành Công
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>

{{--  tìm kiếm --}}
<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  function loadData(){
    $.ajax({
      url :  "{{ route('get.data.product')}}",
      method : 'POST',
      success : function(data){
        $('.data-pro').html(data);
      } 
    });
  }
  $(document).ready(function(){
    $('#search-name').keyup(function(){
     let keyword = $('#search-name').val();
     $.ajax({
      url :  "{{ route('get.searchPro')}}",
      type : 'GET',
      data : {data : keyword },
      success:function(data){
       $('.data-pro').html(data);
     }
   });
   });
    $(document).on('change','#selectall', function(){
      $('.checkitem').prop("checked", $(this).prop("checked"));
      checkAllSubmit();
    });
    $(document).on('change','.checkitem', function(){
      var isChecked = $('input[name = "delAll[]"]').length === $('input[name = "delAll[]"]:checked').length;
      $('#selectall').prop("checked", isChecked);
      checkAllSubmit();
    });

    function checkAllSubmit(){
      var checkedCount = $('input[name = "delAll[]"]:checked').length;
      if (checkedCount > 0){
        $('#deleleall').removeClass('disabled');
      } else {
       $('#deleleall').addClass('disabled');
     }

   }
$(document).on('click','#deleleall', function(e){
    e.preventDefault();
    var isSubmit = !$(this).hasClass('disabled');
    if (isSubmit) {
      let value =  [];
      $('input[name = "delAll[]"]:checked').each(function(){
        value.push($(this).val());
      });
      $.ajax({
        url :  "{{ route('del.All.product')}}",
        type : 'POST',
        data : {data : value },
        success:function(data){
          console.log(data);
          loadData();
        }
      });
    }
  });
      function upStatus(iD, status){
    $.ajax({
      url :  "{{ route('upSta.product')}}",
      type : 'POST',
      data : {data : iD, status : status },
      success:function(data){
        if (data) {
             $('#updateS').modal('show');
        }
        console.log(data);
        loadData();
        //location.reload();
     }
   });
  }
  $(document).on('change','.checkStatus', function(){
    let iD = $(this).val();
    let status = $(this).data('status');
     upStatus(iD, status);

 });


 // cập nhật stt
 $(document).on('blur','.stt', function(){
  let id = $(this).data('id');
  let stt = $(this).val();
  edit_stt(id, stt);
});
function edit_stt(id, stt) {
  $.ajax({
    url :  "{{ route('edt.stt.product')}}",
    type : 'POST',
    data : {data : id, dStt : stt },
    success:function(data){
      $('#updateS').modal('show');
      loadData();
    }
  });
}
});  


</script>
@stop