@extends('layouts.site')
@section('main')
<div class="body">
    <div class="container">
        <div class="row">
            <!-- CONTENT LEFT -->
            <div class="col-lg-8 col-md-8">
                <div class="game-mobile-breadcrumbs">
                    <ul>
                        <li class="home"><a href="{{route('home.index')}}">
                        Trang chủ
                        <i class="fa-solid fa-angle-right"></i>
                        </a></li>
                        <li><a href="{{route('home.category', $post->category->id)}}">
                        {{$post->category->name}}
                        <i class="fa-solid fa-angle-right"></i>
                        </a></li>
                        <li><a href="{{ route('home.post', $post->id) }}">{{$post->title}}</a></li>
                    </ul>
                </div>
                <div class="td-post-header">
                    <ul class="td-category">
                        <li class="entry-category"><a style="text-transform: uppercase;" href="{{route('home.category', $post->category->id)}}">{{$post->category->name}}</a></li>
                    </ul>
                    <div class="td-post-title">
                        <h1 class="entry-title">{{$post->title}}</h1>
                        <div class="td-module-meta-info td-module-meta-medium-info">
                            <div class="info">
                                <span class="td-post-author-name">
                                    <a href="#"></a>
                                    <span></span>
                                </span>
                                <span class="td-post-date">
                                    <time class="entry-date updated td-module-date" datetime="">{{$post->created_at->format('d/m/Y')}}</time>
                                </span>
                            </div>
                            <div class="view-comment">
                                <div class="td-post-views">
                                    <i class="td-icon-views fa-solid fa-eye"></i>100
                                </div>
                                <div class="td-post-comments">
                                    <i class="td-icon-views fa-solid fa-comments"></i>0
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="td-post-social">
                    <div class="tdm-social-item-wrap">
                        <a class="tdm-social-item tdm-social-item-facebook"><i class="fa-brands fa-facebook"></i></a>
                        <a class="tdm-social-item tdm-social-item-twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a class="tdm-social-item tdm-social-item-youtube"><i class="fa-brands fa-youtube"></i></a>
                        <a class="tdm-social-item tdm-social-item-instagram"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="td-post-content">
                    <p>{{$post->description}}</p>
                    <p style="text-align: justify;" class="content">{!!$post->content!!}</p>
                </div>

                <div class="td-post-social td-post-social-bottom">
                    <div class="social-like">
                        <i class="fa-solid fa-thumbs-up"></i>Thích
                    </div>
                    <div class="tdm-social-item-wrap">
                        <a class="tdm-social-item tdm-social-item-facebook"><i class="fa-brands fa-facebook"></i></a>
                        <a class="tdm-social-item tdm-social-item-twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a class="tdm-social-item tdm-social-item-youtube"><i class="fa-brands fa-youtube"></i></a>
                        <a class="tdm-social-item tdm-social-item-instagram"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="td-post-next-prev-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="td-post-prev-content">
                                <span>Bài trước</span>
                                <a href="#">Đập Trứng Phục Sinh PUBG Mobile 0.12.0 NHẬN ĐỒ MIỄN PHÍ, cơ hội để game thủ “làm giàu không khó”</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="td-post-next-content">
                                <span>Bài tiếp theo</span>
                                <a href="#">Vì sao thà Tencent phát triển game mới còn hơn ra điện thoại chơi game của riêng mình?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="author"></div>

                <div class="td-related-title">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="detail-info">
                                        <nav class="d-flex">
                                            <div class="nav nav-tabs tabs-title" id="nav-tab" role="tablist">
                                                <a class="nav-link active" id="nav-tt-tab" data-toggle="tab" href="#nav-dt" role="tab" aria-controls="nav-dt" aria-selected="true">BÀI VIẾT LIÊN QUAN</a>
                                                <a class="nav-link" id="nav-gt-tab" data-toggle="tab" href="#nav-gt" role="tab" aria-controls="nav-ts" aria-selected="false">XEM THÊM</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content current" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-dt" role="tabpanel" aria-labelledby="nav-dt-tab">
                                                <div class="hot-news-slider">   
                                                    @foreach($related_posts as $rlt)                
                                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                                            <div class="td-module-hot">
                                                                <div class="hot-news-medium">
                                                                    <img class="entry-thumb" src="{{$rlt->image}}" alt="" title="{{$rlt->title}}">
                                                                    <div class="td-module-medium-info">
                                                                        <a href="{{route('home.category', $post->category->id)}}">{{$post->category->name}}</a>
                                                                        <h3 class="entry-medium-title td-module-title">
                                                                            <a href="{{route('home.post', $post->id)}}" rel="bookmark" title="{{$rlt->title}}">{{$rlt->title}}</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>                          
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-gt" role="tabpanel" aria-labelledby="nav-gt-tab">
                                                <div class="hot-news-slider">                   
                                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                                        <div class="td-module-hot">
                                                            <div class="hot-news-medium">
                                                                <img class="entry-thumb" src="images/hot_news_8.jpg" alt="" title="MSI được tổ chức tại Việt Nam năm nay chính là kì MSI hấp dẫn nhất từ trước tới giờ">
                                                                <div class="td-module-medium-info">
                                                                    <a href="#" class="td-post-category">GAME MOBILE</a>
                                                                    <h3 class="entry-medium-title td-module-title">
                                                                        <a href="" rel="bookmark" title="Sau Alan Walker, PUBG Mobile hợp tác với hot DJ hàng đầu Hàn Quốc để ra Album, phối lại giai điệu chủ đề">Sau Alan Walker, PUBG Mobile hợp tác với hot DJ hàng đầu Hàn Quốc để ra Album, phối lại giai điệu chủ đề</a>
                                                                    </h3>
                                                                </div>
                                                            </div>                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="td-next-prev-wrap">
                                            <button class="prev"><i class="fa-solid fa-angle-left"></i></button>
                                            <button class="next"><i class="fa-solid fa-angle-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                <div class="comment-view-blog">
                    <div class="total-cmt">
                        <p><span>3</span> comment in {{$post->title}}</p>
                    </div>
                    @foreach($comments as $cmt)
                    <div class="cmt-detail">
                        <div class="user-avt"><img src="images/catba.jpg"></div>
                        <div class="user-info">
                            <a href=""><h3>{{ $cmt->user->name }}</h3></a>
                            <p>Ngày bình luận <span class="user-time">{{$cmt->created_at->format('d/m/Y')}}</span></p>
                            <p>{{$cmt->comment}}</p>
                            <div class="react-cmt">
                                <span>Xem thêm</span>
                                <span>Phản hồi</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="sub-reply-cmt">
                    <h3 class="sub-rep-user">Bình luận</h3>
                    @if(Auth::guard('cus')->check())
                    <form class="form-reply" action="{{route('home.comment', $post->id)}}" method="POST">
                        @csrf
                        <textarea name="comment" rows="10" cols="30" placeholder="Bình luận"></textarea>
                        <!-- <span><input type="checkbox" id="checkbox" name=""> Lưu tên, email của tôi trong trình duyệt này cho phần bình luận tiếp theo.</span> -->
                        <button type="submit">Post your comment</button>
                    </form>
                    @else
                    <div class="alert alert-danger" role="alert">
                        <strong>Đăng nhập để bình luận</strong> click vào đây <a href="{{route('home.login')}}">Đăng nhập</a>
                    </div>
                    @endif
                </div>
            </div>
            <!-- CONTENT RIGHT -->
            <div class="col-lg-4 col-md-4" style="margin-top: 21px;">
                <div class="most-view">
                    <div class="td-block-title-wrap">
                        <h4 class="td-block-title-right td-block-title-most-view">
                            <span class="td-pulldown-size">XEM NHIỀU</span>
                        </h4>
                    </div>

                    <div class="td-most-view">
                        @foreach($most_view_posts as $mvp)
                        <div class="most-view-medium">
                            <div class="item-details most-view-details">
                                <h3 class="entry-most-view-title td-module-title">
                                    <a href="{{route('home.post', $mvp->id)}}" rel="bookmark" title="{{$mvp->title}}">{{$mvp->title}}</a>
                                </h3>
                                <div class="td-module-meta-info td-module-meta-medium-info">
                                    <div class="info">
                                        <span class="td-post-date">
                                            <time class="entry-date updated td-module-date" datetime="">{{$mvp->created_at->format('d/m/Y')}}</time>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="td-module-hot">
                                <a href="{{route('home.post', $mvp->id)}}" rel="bookmark" class="" title="{{$mvp->title}}">
                                        <img class="entry-thumb" src="{{$mvp->image}}" alt="" title="{{$mvp->title}}" data-type="image_tag" width="100" height="70">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    figure img {
        max-width: 730px!important;
    }
</style>
@endsection