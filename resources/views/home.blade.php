@extends('layouts.site')
@section('main')
<div class="body">
<!-- SLIDE NEWS -->
    <div class="container">
        <div class="row multi-columns-row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="slide-news">
                    <div class="row multi-columns-row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="news-btn">
                            <p>Tin hot</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="news-content">
                            <h3 class="news-slider hot-news-title entry-title td-module-title">
                                @foreach($sliders as $sld)
                                <div class="slide-text"><a href="{{route('home.post', $sld->id)}}" rel="bookmark" title="{{$sld->title}}">{{$sld->title}}</a></div>
                                @endforeach
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="td-next-prev-wrap">
                            <button class="prev"><i class="fa-solid fa-angle-left"></i></button>
                            <button class="next"><i class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HOT SLIDES -->
    <div class="container">
        <div class="td_block_wrap">
            <div class="home-slider">
                <div class="smart-slider td-big-grid-post td-big-thumb">
                    <div class="td-module-thumb">
                        <a href="" rel="bookmark" class="td-image-wrap" title="Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng"><img src="{{ asset('public/site/images/test1.jpg') }}" class="card-image" alt="" title="Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng" data-type="image_tag"></a>
                    </div>
                    <div class="td-meta-info-container">
                        <div class="td-meta-align">
                            <div class="td-big-grid-meta">
                                <h3 class="entry-title td-module-title">
                                    <a href="" title="Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng">Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng.</a>
                                </h3>
                            </div>
                            <div class="td-module-meta-info">
                                <span class="td-post-author-name">
                                    <a href="#">mona</a>
                                    <span>-</span>
                                </span>
                                <span class="td-post-date">
                                    <time class="entry-date updated td-module-date" datetime="2019-04-24T08:05:55+00:00">24 Tháng Tư, 2019</time>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="smart-slider td-big-grid-post td-big-thumb">
                    <div class="td-module-thumb">
                        <a href="" rel="bookmark" class="td-image-wrap" title="Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng"><img src="{{ asset('public/site/images/test2.jpg') }}" class="card-image" alt="" title="Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng" data-type="image_tag"></a>
                    </div>
                    <div class="td-meta-info-container">
                        <div class="td-meta-align">
                            <div class="td-big-grid-meta">
                                <h3 class="entry-title td-module-title">
                                    <a href="" title="Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng">Trầm trồ trước “dân chơi” độ dàn siêu xe...</a>
                                </h3>
                            </div>
                            <div class="td-module-meta-info">
                                <span class="td-post-author-name">
                                    <a href="#">mona</a>
                                    <span>-</span>
                                </span>
                                <span class="td-post-date">
                                    <time class="entry-date updated td-module-date" datetime="2019-04-24T08:05:55+00:00">24 Tháng Tư, 2019</time>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="smart-slider td-big-grid-post td-big-thumb">
                    <div class="td-module-thumb">
                        <a href="" rel="bookmark" class="td-image-wrap" title="Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng"><img src="{{ asset('public/site/images/test3.jpg') }}" class="card-image" alt="" title="Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng" data-type="image_tag"></a>
                    </div>
                    <div class="td-meta-info-container">
                        <div class="td-meta-align">
                            <div class="td-big-grid-meta">
                                <h3 class="entry-title td-module-title">
                                    <a href="" title="Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng">Trầm trồ trước “dân chơi” độ dàn siêu xe...</a>
                                </h3>
                            </div>
                            <div class="td-module-meta-info">
                                <span class="td-post-author-name">
                                    <a href="#">mona</a>
                                    <span>-</span>
                                </span>
                                <span class="td-post-date">
                                    <time class="entry-date updated td-module-date" datetime="2019-04-24T08:05:55+00:00">24 Tháng Tư, 2019</time>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="smart-slider td-big-grid-post td-big-thumb">
                    <div class="td-module-thumb">
                        <a href="" rel="bookmark" class="td-image-wrap" title="Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng"><img src="{{ asset('public/site/images/test4.jpg') }}" class="card-image" alt="" title="Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng" data-type="image_tag"></a>
                    </div>
                    <div class="td-meta-info-container">
                        <div class="td-meta-align">
                            <div class="td-big-grid-meta">
                                <h3 class="entry-title td-module-title">
                                    <a href="" title="Trầm trồ trước “dân chơi” độ dàn siêu xe Audi PC trị giá 4.2 tỉ đồng">Trầm trồ trước “dân chơi” độ dàn siêu xe...</a>
                                </h3>
                            </div>
                            <div class="td-module-meta-info">
                                <span class="td-post-author-name">
                                    <a href="#">mona</a>
                                    <span>-</span>
                                </span>
                                <span class="td-post-date">
                                    <time class="entry-date updated td-module-date" datetime="2019-04-24T08:05:55+00:00">24 Tháng Tư, 2019</time>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HOT NEWS -->
    <div class="news-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <!-- HOT NEWS -->
                    <div class="td-block-title-wrap hot-news">
                        <h4 class="td-block-title">
                            <span>TIN HOT</span>
                        </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            @foreach($new_posts_big as $npb)
                            <div class="hot-news-big">
                                <div class="td-module-hot">
                                    <a href="{{route('home.post', $npb->id)}}" rel="bookmark" title="{{$npb->title}}">
                                            <img class="entry-thumb" src="{{$npb->image}}" alt="" title="{{$npb->title}}" data-type="image_tag" width="324" height="235">
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h3 class="entry-title td-module-title">
                                        <a href="{{route('home.post', $npb->id)}}" rel="bookmark" title="{{$npb->title}}">{{$npb->title}}</a>
                                    </h3>
                                    <div class="td-module-meta-info td-module-meta-medium-info">
                                        <div class="info">
                                            <span class="td-post-author-name">
                                                <a href="#">mona</a>
                                                <span>-</span>
                                            </span>
                                            <span class="td-post-date">
                                                <time class="entry-date updated td-module-date" datetime="">{{$npb->created_at->format('d/m/Y')}}</time>
                                            </span>
                                        </div>
                                        <div class="td-module-comments">
                                            <a href="#">0</a>
                                        </div>
                                    </div>
                                    <div class="td-excerpt">{{$npb->description}}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="hot-news-slider">
                                @foreach($new_posts_medium as $npm)                   
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="td-module-hot">
                                        <div class="hot-news-medium">
                                            <a href="{{route('home.post', $npm->id)}}" rel="bookmark" title="{{$npm->title}}">
                                                <img class="entry-thumb" src="{{$npm->image}}" alt="" title="{{$npm->title}}" data-type="image_tag" width="214" height="145">
                                            </a>
                                            <div class="td-module-medium-info">
                                                 <a href="{{route('home.category', $npm->category->id)}}" class="td-post-category">{{$npm->category->name}}</a>
                                                <h3 class="entry-medium-title td-module-title">
                                                    <a href="{{route('home.post', $npm->id)}}" rel="bookmark" title="{{$npm->title}}">{{$npm->title}}</a>
                                                </h3>
                                            </div>
                                        </div>                          
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- NEW NEWS -->
                    <div class="td-block-title-wrap new-news">
                        <h4 class="td-block-title">
                            <span>TIN MỚI</span>
                        </h4>
                    </div>
                    <div class="row">
                        @foreach($hot_posts as $hp)
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="new-news-medium">
                                <div class="td-module-hot">
                                    <a href="{{ route('home.post', $hp->id) }}" title="{{$hp->title}}">
                                            <img class="entry-thumb" src="{{$hp->image}}" alt="" title="{{$hp->title}}" data-type="image_tag" width="218" height="150">
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h3 class="entry-new-news-title td-module-title">
                                        <a href="{{ route('home.post', $hp->id) }}" rel="bookmark" title="{{$hp->title}}">{{$hp->title}}</a>
                                    </h3>
                                    <div class="td-module-meta-info td-module-meta-medium-info">
                                        <div class="info">
                                            <span class="td-post-author-name">
                                                <a href="#">mona</a>
                                                <span>-</span>
                                            </span>
                                            <span class="td-post-date">
                                                <time class="entry-date updated td-module-date" datetime="">{{$npb->created_at->format('d/m/Y')}}</time>
                                            </span>
                                        </div>
                                        <div class="td-module-comments">
                                            <a href="#">0</a>
                                        </div>
                                    </div>
                                    <div class="td-excerpt">{{$hp->description}}                         
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- CONTENT RIGHT -->
                <div class="col-lg-4 col-md-4">
                    <div class="social">
                        <div class="td-block-title-wrap">
                            <h4 class="td-block-title-right">
                                <span class="td-pulldown-size">MẠNG XÃ HỘI</span>
                            </h4>
                        </div>
                        <div class="td-social-list">
                            <div class="td-social-type td-social-facebook">
                                <div class="td-social-box">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2">
                                            <div class="td-social-icon"><i class="fa-brands fa-facebook"></i></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="td-social-info">20,822 Thành viên</div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="td-social-button">THÍCH</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="td-social-type td-social-instagram">
                                <div class="td-social-box">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2">
                                            <div class="td-social-icon"><i class="fa-brands fa-instagram"></i></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="td-social-info">274 Người theo dõi</div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="td-social-button">THEO DÕI</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="td-social-type td-social-youtube">
                                <div class="td-social-box">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2">
                                            <div class="td-social-icon"><i class="fa-brands fa-youtube"></i></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="td-social-info">302,000 Người đăng ký</div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="td-social-button">ĐĂNG KÝ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MOST VIEW -->
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

    <!-- NOI BAT -->
    <div class="outstanding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="td-block-title-wrap">
                        <h4 class="td-block-title-right td-block-title-outstanding">
                            <span>NỔI BẬT</span>
                            <div class="td-block-subtitle">END GAME</div>
                        </h4>
                    </div>
                </div>

                <div class="outstanding-content">
                    <div class="container">
                        <div class="outstanding-slider">
                        @foreach($out_posts as $op)                    
                            <div class="td-module-outstanding">
                                <div class="hot-news-medium">
                                    <img class="entry-thumb" src="{{$op->image}}" alt="" title="{{$op->title}}">
                                    <div class="td-module-medium-info">
                                        <a href="{{route('home.category', $op->category->id)}}}" class="td-post-category">{{$op->category->name}}</a>
                                        <h3 class="entry-medium-title td-module-title">
                                            <a href="{{route('home.post', $op->id)}}}" rel="bookmark" title="{{$op->title}}">{{$op->title}}</a>
                                        </h3>
                                    </div>
                                </div>                          
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LIST NEWS -->
    <div class="list-news">
        <div class="container">
            <div class="row">
                <!-- CONTENT LEFT -->
                <div class="col-lg-8 col-md-8">
                    <div class="cat-content-news">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="td-block-title-wrap">
                                    <h4 class="td-block-title">
                                        <span>GIÁO DỤC</span>
                                    </h4>
                                </div>

                                <div class="td-medium-news">
                                    <div class="row">
                                        @foreach($content_list_news as $cln)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="cat-content-news-medium">
                                                <div class="td-module-hot">
                                                    <a href="{{route('home.post', $cln->id)}}" rel="bookmark" class="" title="{{$cln->title}}"><img class="entry-thumb" src="{{$cln->image}}" alt="" title="{{$cln->title}}" data-type="image_tag" width="350" height="170"></a>
                                                </div>
                                                <div class="cat-content-news-details cat-content-news-medium-details">
                                                    <h3 class="entry-new-news-title td-module-title">
                                                        <a href="{{route('home.post', $cln->id)}}" rel="bookmark" title="{{$cln->title}}">{{$cln->title}}</a>
                                                    </h3>
                                                    <div class="td-module-meta-info td-module-meta-medium-info">
                                                        <div class="info">
                                                            <span class="td-post-author-name">
                                                                <a href="#">mona</a>
                                                                <span>-</span>
                                                            </span>
                                                            <span class="td-post-date">
                                                                <time class="entry-date updated td-module-date">{{$cln->created_at->format('d/m/Y')}}</time>
                                                            </span>
                                                        </div>
                                                        <div class="td-module-comments">
                                                            <a href="#">0</a>
                                                        </div>
                                                    </div>
                                                    <div class="td-excerpt">{{$cln->description}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat-content-news">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="td-block-title-wrap">
                                    <h4 class="td-block-title">
                                        <span>GAME MOBILE</span>
                                    </h4>
                                </div>

                                <div class="td-medium-news">
                                    <div class="row">
                                        @foreach($content_list_news as $cln)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="cat-content-news-medium">
                                                <div class="td-module-hot">
                                                    <a href="{{route('home.post', $cln->id)}}" rel="bookmark" class="" title="{{$cln->title}}"><img class="entry-thumb" src="{{$cln->image}}" alt="" title="{{$cln->title}}" data-type="image_tag" width="350" height="170"></a>
                                                </div>
                                                <div class="cat-content-news-details cat-content-news-medium-details">
                                                    <h3 class="entry-new-news-title td-module-title">
                                                        <a href="{{route('home.post', $cln->id)}}" rel="bookmark" title="{{$cln->title}}">{{$cln->title}}</a>
                                                    </h3>
                                                    <div class="td-module-meta-info td-module-meta-medium-info">
                                                        <div class="info">
                                                            <span class="td-post-author-name">
                                                                <a href="#">mona</a>
                                                                <span>-</span>
                                                            </span>
                                                            <span class="td-post-date">
                                                                <time class="entry-date updated td-module-date">{{$cln->created_at->format('d/m/Y')}}</time>
                                                            </span>
                                                        </div>
                                                        <div class="td-module-comments">
                                                            <a href="#">0</a>
                                                        </div>
                                                    </div>
                                                    <div class="td-excerpt">{{$cln->description}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat-content-news">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="td-block-title-wrap">
                                    <h4 class="td-block-title">
                                        <span>GAME MOBILE</span>
                                    </h4>
                                </div>

                                <div class="td-medium-news">
                                    <div class="row">
                                        @foreach($content_list_news as $cln)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="cat-content-news-medium">
                                                <div class="td-module-hot">
                                                    <a href="{{route('home.post', $cln->id)}}" rel="bookmark" class="" title="{{$cln->title}}"><img class="entry-thumb" src="{{$cln->image}}" alt="" title="{{$cln->title}}" data-type="image_tag" width="350" height="170"></a>
                                                </div>
                                                <div class="cat-content-news-details cat-content-news-medium-details">
                                                    <h3 class="entry-new-news-title td-module-title">
                                                        <a href="{{route('home.post', $cln->id)}}" rel="bookmark" title="{{$cln->title}}">{{$cln->title}}</a>
                                                    </h3>
                                                    <div class="td-module-meta-info td-module-meta-medium-info">
                                                        <div class="info">
                                                            <span class="td-post-author-name">
                                                                <a href="#">mona</a>
                                                                <span>-</span>
                                                            </span>
                                                            <span class="td-post-date">
                                                                <time class="entry-date updated td-module-date">{{$cln->created_at->format('d/m/Y')}}</time>
                                                            </span>
                                                        </div>
                                                        <div class="td-module-comments">
                                                            <a href="#">0</a>
                                                        </div>
                                                    </div>
                                                    <div class="td-excerpt">{{$cln->description}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat-content-news">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="td-block-title-wrap">
                                    <h4 class="td-block-title">
                                        <span>GAME MOBILE</span>
                                    </h4>
                                </div>

                                <div class="td-medium-news">
                                    <div class="row">
                                        @foreach($content_list_news as $cln)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="cat-content-news-medium">
                                                <div class="td-module-hot">
                                                    <a href="{{route('home.post', $cln->id)}}" rel="bookmark" class="" title="{{$cln->title}}"><img class="entry-thumb" src="{{$cln->image}}" alt="" title="{{$cln->title}}" data-type="image_tag" width="350" height="170"></a>
                                                </div>
                                                <div class="cat-content-news-details cat-content-news-medium-details">
                                                    <h3 class="entry-new-news-title td-module-title">
                                                        <a href="{{route('home.post', $cln->id)}}" rel="bookmark" title="{{$cln->title}}">{{$cln->title}}</a>
                                                    </h3>
                                                    <div class="td-module-meta-info td-module-meta-medium-info">
                                                        <div class="info">
                                                            <span class="td-post-author-name">
                                                                <a href="#">mona</a>
                                                                <span>-</span>
                                                            </span>
                                                            <span class="td-post-date">
                                                                <time class="entry-date updated td-module-date">{{$cln->created_at->format('d/m/Y')}}</time>
                                                            </span>
                                                        </div>
                                                        <div class="td-module-comments">
                                                            <a href="#">0</a>
                                                        </div>
                                                    </div>
                                                    <div class="td-excerpt">{{$cln->description}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTENT RIGHT -->
                <div class="col-lg-4 col-md-4">
                    <div class="recent">
                        <div class="td-block-title-wrap">
                            <h4 class="td-block-title-right">
                                <span class="td-pulldown-size">GẦN ĐÂY</span>
                            </h4>
                        </div>
                        <div class="td-new-list">
                            @foreach($recently_posts as $rcp)
                            <div class="td-module-medium-info td-new-list-info">
                                <h3 class="entry-medium-title td-module-title">
                                    <a href="{{route('home.post', $rcp->id)}}" rel="bookmark" title="{{$rcp->title}}">{{$rcp->title}}</a>
                                </h3>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="list-info">
                        <div class="td-block-title-wrap">
                            <h4 class="td-block-title-right">
                                <span class="td-pulldown-size">CHUYÊN MỤC</span>
                            </h4>
                        </div>
                        <ul class="td-pb-padding-side">
                            @foreach($cats as $cat)
                            <li>
                                <a href="{{route('home.category', $cat->id)}}">
                                    <span class="list-name">{{ $cat->name }}</span>
                                    <span class="list-number">{{ $cat->posts ? $cat->posts->count() : 0 }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="contact">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection