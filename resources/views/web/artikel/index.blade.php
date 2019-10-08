@extends('web.app-artikel')
@section('title')
Posts Artikel
@endsection
@section('content')
<div class="post-image">
    <a href="#">
        <img alt="" src="{{asset('site/images/blog/1.jpg')}}">
    </a>
</div>
<div class="post-item-description">
    <h2>{{$posts->title}}</h2>
    <div class="post-meta">
        <span class="post-meta-date"><i
                class="fa fa-calendar-o"></i>{{date('j M, Y h:ia', strtotime($posts->created_at))}}</span>
        {{-- <span class="post-meta-comments"><a href="#"><i class="fa fa-comments-o"></i>33 Comments</a></span> --}}
        <span class="post-meta-category"><a href="#"><i
                    class="fa fa-tag"></i>{{$posts->category->name_category}}</a></span>
        <div class="post-meta-share">
            <a class="btn btn-xs btn-slide btn-facebook" href="#">
                <i class="fab fa-facebook-f"></i>
                <span>Facebook</span>
            </a>
            <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                <i class="fab fa-twitter"></i>
                <span>Twitter</span>
            </a>
            <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                <i class="fab fa-instagram"></i>
                <span>Instagram</span>
            </a>
            <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                <i class="far fa-envelope"></i>
                <span>Mail</span>
            </a>
        </div>
    </div>
    {!!$posts->body!!}
</div>
<div class="post-tags">
    @foreach ($posts->tags as $tag)
    <a href="#">{{ $tag->name }}</a>
    @endforeach
</div>
<div class="post-navigation">
    <a href="blog-single-slider.html" class="post-prev">
        <div class="post-prev-title"><span>Previous Post</span>Post with a slider
            and lightbox</div>
    </a>
    <a href="blog-masonry-3.html" class="post-all">
        <i class="icon-grid"> </i>
    </a>
    <a href="blog-single-video.html" class="post-next">
        <div class="post-next-title"><span>Next Post</span>Post with YouTube Video
        </div>
    </a>
</div>
@endsection