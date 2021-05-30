
<nav class="sidebar dark_sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="{{ route('get.home')}}"><img src="{{asset('backend/img/logo_white.png')}}" alt=""></a>
        <a class="small_logo" href="{{ route('get.home')}}"><img src="{{ asset('backend/img/mini_logo.png ')}}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a href="{{ route('get.home')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('backend/img/menu-icon/dashb')}}oard.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Bảng Điều Khiển</span>
                </div>
            </a>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('backend/img/menu-icon/2.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Quản Lý Sản Phẩm</span>
                </div>
            </a>
            <ul>
              <li><a href="{{ route('get.category')}}">Danh Mục Sản Phẩm</a></li>
              <li><a href="{{ route('get.product')}}">Sản Phẩm</a></li>
            </ul>
        </li>
        <li class="">
            <a  href="{{ route('get.orders')}}" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="{{ asset('backend/img/menu-icon/3.svg')}}" alt="">
            </div>
            <div class="nav_title">
                <span>Đơn Hàng</span>
            </div>
            </a>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="{{ asset('backend/img/menu-icon/4.svg')}}" alt="">
            </div>
            <div class="nav_title">
                <span>Quản Lý Bài Viết</span>
            </div>
            </a>
            <ul>
                @foreach(config('posts.admin.post') as $item)
                <li><a href="#">{{$item['name']}}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="{{ asset('backend/img/menu-icon/11.sv')}}g" alt="">
            </div>
            <div class="nav_title">
                <span>Quản Lý Hình Ảnh</span>
            </div>
            </a>
            <ul>
              <li><a href="#">Logo</a></li>
              <li><a href=" ">Slideshow</a></li>
              <li><a href="#">Banner</a></li>
            </ul>
        </li>
   
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="{{ asset('backend/img/menu-icon/5.svg')}}" alt="">
            </div>
            <div class="nav_title">
                <span>Quản Lý Tài Khoản</span>
            </div>
            </a>
            <ul>
              <li><a href="{{ route('get.permission')}}">Quyền</a></li>
              <li><a href="{{ route('get.info')}}">Thông Tin Admin</a></li>
              <li><a href="{{ route('get.users')}}">Tài Khoản Người Dùng</a></li>
              <li><a href="{{ route('get.members')}}">Tài Khoản Khách</a></li>

            </ul>
        </li>
             <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="{{ asset('backend/img/menu-icon/5.svg')}}" alt="">
            </div>
            <div class="nav_title">
                <span>Quản Lý Chung</span>
            </div>
            </a>
            <ul>
              <li><a href="#">Giới Thiệu</a></li>
            </ul>
        </li>
  
          <li class="">
              <a href="#" aria-expanded="false">
                  <div class="nav_icon_small">
                      <img src="{{ asset('backend/img/menu-icon/9.svg')}}" alt="">
                  </div>
                  <div class="nav_title">
                      <span>Thiết Lập</span>
                  </div>
              </a>
          </li>

      </ul>
</nav>