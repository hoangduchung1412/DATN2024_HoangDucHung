<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Add Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/site/css/global.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/site/css/login1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/site/css/style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Jquery -->
    <script type="text/javascript" src="{{ asset('public/site/js/jquery-3.6.0.js') }}"></script>
    <!-- <link rel="icon" href="images/AnhCat/logo.png" type="image/png"> -->
    <title>Game Mona</title>
</head>

<body>
    <div class="main-content">
        <header class="">
            <div class="top-content">
                <div class="container">
                    <div class="top">
                        <div class="top-time">
                            <a id="clock" class="clock"></a>
                            <script type="text/javascript">
                                setInterval(function(){
                                    // khoi tao doi tuong thoi gian
                                    var date = new Date();
                                    var day = date.getDate();
                                    var month = date.getMonth(); //thang chay tu 0 den 11 tuong ung voi thang1 den 12
                                    month++;
                                    var year = date.getFullYear();
                                    var hour = date.getHours();
                                    var minute = date.getMinutes();
                                    var second = date.getSeconds();
                                    var dayofweek = date.getDay();
                                    var str = "";
                                    switch(dayofweek) {
                                        case 0: str = "Chủ Nhật"; break;
                                        case 1: str = "Thứ Hai"; break;
                                        case 2: str = "Thứ Ba"; break;
                                        case 3: str = "Thứ Tư"; break;
                                        case 4: str = "Thứ Năm"; break;
                                        case 5: str = "Thứ Sáu"; break;
                                        case 6: str = "Thứ Bảy"; break;             
                                    }
                                    var AMPM = (hour > 0 && hour <=12) ? "A.M" : "PM";
                                    var time = str + ", " + day + "/" + month + "/" + year + " " + hour + ":" + minute + ":" + second + " " + AMPM;
                                    document.getElementById('clock').innerHTML = time;
                                },1000);
                              </script>
                        </div>
                        @if(Auth::guard('cus')->check())
                        <div class="top-btn">
                            <a href="" class="">Chào, {{Auth::guard('cus')->user()->name}}</a>
                        </div>
                        @else
                        <div class="top-btn">
                            <a href="" class=""></a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="header-content">
                <div class="container">
                    <div class="header-menu">
                        <div class="logo">
                            <img src="{{ asset('public/site/images/logo.png') }}" class="logo-img">
                        </div>
                        <div class="menu">
                            <ul>
                                <li><a class="" href="{{route('home.index')}}">Trang chủ</a></li>
                                @foreach($cats as $cat)
                                    <li><a href="{{route('home.category', $cat->id)}}">{{ $cat->name }}</a></li>
                                @endforeach
                                <li><a href="#">Thêm <i class="menu-right fa-solid fa-angle-down"></i></a></li>
                            </ul>
                        </div>
                        <div class="menu-btn">
                            <div class="search-btn">
                                <button id="openSearchModalBtn" class="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                                <div id="searchModal" class="modal">
                                    <div class="modal-content">
                                      <div class="main-title-box"><p class="main-title">Search</p></div>
                                      <form class="search-form" action="">
                                        <input type="text" name="title" id="title" class="f-search" placeholder="Search..">
                                        <button type="submit" class="main-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                      </form>
                                      <div class="smart-search" id="titleList">
                                        <!-- <ul>
                                            
                                        </ul> -->
                                      </div>
                                      {{ csrf_field() }} 
                                      <span class="close">&times;</span>
                                      <script>
                                      $(document).ready(function(){

                                       $('#title').keyup(function(){ //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
                                        var query = $(this).val(); //lấy gía trị ng dùng gõ
                                        if(query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
                                        {
                                         var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
                                         $.ajax({
                                          url:"{{ route('home.search') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
                                          method:"POST", // phương thức gửi dữ liệu.
                                          data:{query:query, _token:_token},
                                          success:function(data){ //dữ liệu nhận về
                                           $('#titleList').fadeIn();  
                                           $('#titleList').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là titleList
                                         }
                                       });
                                       }
                                     });

                                       $(document).on('click', 'li', function(){  
                                        $('#title').val($(this).text());  
                                        $('#titleList').fadeOut();  
                                      });  

                                     });
                                    </script>
                                    </div>
                                </div>
                            </div>
                            <div class="login-btn">
                                <button onclick="toggleInfoUser()" class="user"><i class="fa-solid fa-user"></i></button>
                                <div class="user-log">
                                    @if(Auth::guard('cus')->check())
                                    <div class="user profile"><a href="">{{Auth::guard('cus')->user()->name}}</a></div>
                                    <div class="user logout"><a href="{{route('home.logout')}}">Đăng xuất</a></div>
                                    @else
                                    <div class="user profile"><a href="">Thông tin cá nhân</a></div>
                                    <div class="user login"><a href="{{route('home.login')}}">Đăng nhập</a></div>
                                    <div class="user register"><a href="{{route('home.register')}}">Đăng ký</a></div>
                                    <div class="user logout"><a href="{{route('home.logout')}}">Đăng xuất</a></div>
                                    @endif
                                </div>
                                <script type="text/javascript">
                                    function toggleInfoUser() {
                                      const userlog = document.querySelector('.user-log');
                                      userlog.classList.toggle('active');
                                    }
                                    function toggleNotifi() {
                                      const userhis = document.querySelector('.user-his');
                                      userhis.classList.toggle('active');
                                    }
                                </script>
                            </div>
                            <div class="notifi-btn">
                                <button onclick="toggleNotifi()" class="notifi"><i class="fa-solid fa-clock-rotate-left"></i></button>
                                <div class="user-his">
                                    <ul>
                                        <li><img src="http://localhost/devpro/php60/php60_project_9/assets/upload/products/1654763864_prd17.webp"><a href="#">MSI được tổ chức tại Việt Nam năm nay chính là kì MSI hấp dẫn nhất từ trước tới giờ</a></li>
                                        <li><img src="http://localhost/devpro/php60/php60_project_9/assets/upload/products/1654763864_prd17.webp"><a href="#">MSI được tổ chức tại Việt Nam năm nay chính là kì MSI hấp dẫn nhất từ trước tới giờ</a></li>
                                        <li><img src="http://localhost/devpro/php60/php60_project_9/assets/upload/products/1654763864_prd17.webp"><a href="#">MSI được tổ chức tại Việt Nam năm nay chính là kì MSI hấp dẫn nhất từ trước tới giờ</a></li>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="body">
            @yield('main')
        </div>
        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="footer-image">
                                <img class="tdm-image" src="{{ asset('public/site/images/footer-logo.png') }}">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="footer-infor">
                                <div class="footer-info-title">
                                    <h3 class="tdm-title">VỀ CHÚNG TÔI</h3>
                                </div>
                                <div class="footer-info-descr">
                                    <p class="tdm-descr">
                                    <br>
                                    <br>
                                    Email liên hệ :  
                                    <a href="">duchung141202@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="contact-social">
                                <div class="footer-info-title">
                                    <h3 class="tdm-title">MẠNG XÃ HỘI</h3>
                                </div>
                                <div class="tdm-social-item-wrap">
                                    <a class="tdm-social-item"><i class="fa-brands fa-facebook"></i></a>
                                    <a class="tdm-social-item"><i class="fa-brands fa-twitter"></i></a>
                                    <a class="tdm-social-item"><i class="fa-brands fa-youtube"></i></a>
                                    <a class="tdm-social-item"><i class="fa-brands fa-instagram"></i></a>
                                    <a class="tdm-social-item"><i class="fa-brands fa-telegram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<!-- Script -->
<script type="text/javascript" src="{{ asset('public/site/js/crud.js') }}"></script>
<!-- Add Slick Carousel JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</html>