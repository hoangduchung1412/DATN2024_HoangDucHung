@extends('layouts.site')
@section('main')
<div class="body">
            <div class="container">
                <div class="game-mobile-breadcrumbs">
                    <ul>
                        <li class="home"><a href="{{route('home.index')}}">
                        Trang chủ
                        <i class="fa-solid fa-angle-right"></i>
                        </a></li>
                        <li><a href="{{ route('home.category', $category->id) }}">{{$category->name}}</li>
                    </ul>
                </div>
                <div class="game-mobile-select">
                    <h1 class="entry-title td-page-title">{{$category->name}}</h1>
                    <form class="filter-xs" method="POST">
                        <div class="order-by-wrapper">
                            <select>
                                <option>MỚI NHẤT</option>
                                <option>A -> Z</option>
                                <option>Z -> A</option>
                                <option>Tin tiêu biểu</option>
                                <option>Phổ biến nhất</option>
                                <option>Xem nhiều trong tuần</option>
                                <option>Bảng điểm đánh giá</option>
                                <option>Ngẫu nhiên</option>
                            </select>
                        </div>
                    </form>
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

            <div class="news-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="row">
                                @foreach($post_cat as $pct)
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="hot-news-big">
                                        <div class="td-module-hot">
                                            <a href="{{route('home.post', $pct->id)}}" title="{{$pct->title}}">
                                                    <img class="entry-thumb" src="{{ $pct->image }}" alt="" title="{{$pct->title}}" data-type="image_tag" width="324" height="220">
                                            </a>
                                        </div>
                                        <div class="item-details">
                                            <h3 class="entry-game-mobile-title td-module-title">
                                                <a href="{{route('home.post', $pct->id)}}" rel="bookmark" title="{{$pct->title}}">{{$pct->title}}</a>
                                            </h3>
                                            <div class="td-module-meta-info td-module-meta-medium-info">
                                                <div class="info">
                                                    <span class="td-post-author-name">
                                                        <a href="#">mona</a>
                                                        <span>-</span>
                                                    </span>
                                                    <span class="td-post-date">
                                                        <time class="entry-date updated td-module-date" datetime="">{{$pct->created_at->format('d/m/Y')}}</time>
                                                    </span>
                                                </div>
                                                <div class="td-module-comments">
                                                    <a href="#">0</a>
                                                </div>
                                            </div>
                                            <div class="td-excerpt">{{$pct->description}}</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="">
                               {{$post_cat->appends(request()->all())->links()}}
                            </div>
                        </div>


                        <!-- CONTENT RIGHT -->
                        <div class="col-lg-4 col-md-4">
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

        </div>
@endsection