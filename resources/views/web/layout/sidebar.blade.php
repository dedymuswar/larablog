<div class="widget  widget-newsletter">
    <form id="widget-search-form-sidebar" action="http://www.inspirothemes.com/polo/search-results-page.html"
        method="get" class="form-inline">
        <div class="input-group">
            <input type="text" aria-required="true" name="q" class="form-control widget-search-form"
                placeholder="Search for pages...">
            <div class="input-group-append">
                <span class="input-group-btn">
                    <button type="submit" id="widget-widget-search-form-button" class="btn"><i
                            class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
    </form>
</div>


<div class="widget">
    <div class="tabs">
        <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular" role="tab"
                    aria-controls="popular" aria-selected="true">Popular</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#featured" role="tab"
                    aria-controls="featured" aria-selected="false">Featured</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent"
                    aria-selected="false">Recent</a>
            </li>
        </ul>
        <div class="tab-content" id="tabs-posts-content">
            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                <div class="post-thumbnail-list">
                    @foreach ($popular as $item)
                    <div class="post-thumbnail-entry">
                        <img alt="" src="{{asset('images/'.$item->image)}}">
                        <div class="post-thumbnail-content">
                            <a href="#">{!! Str::limit($item->title, 50, ' ...')!!}</a>
                            <span class="post-date"><i
                                    class="far fa-clock"></i>{{$item->created_at->diffForHumans()}}</span>
                            <span class="post-category"><i class="fa fa-tag"></i>
                                {{$item->category->name_category}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                <div class="post-thumbnail-list">
                    <div class="post-thumbnail-entry">
                        <img alt="" src="{{asset('site/images/blog/thumbnail/6.jpg')}}">
                        <div class="post-thumbnail-content">
                            <a href="#">Beautiful nature, and rare feathers!</a>
                            <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                            <span class="post-category"><i class="fa fa-tag"></i>
                                Lifestyle</span>
                        </div>
                    </div>
                    <div class="post-thumbnail-entry">
                        <img alt="" src="{{asset('site/images/blog/thumbnail/7.jpg')}}">
                        <div class="post-thumbnail-content">
                            <a href="#">The most happiest time of the day!</a>
                            <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                            <span class="post-category"><i class="fa fa-tag"></i>
                                Lifestyle</span>
                        </div>
                    </div>
                    <div class="post-thumbnail-entry">
                        <img alt="" src="{{asset('site/images/blog/thumbnail/8.jpg')}}">
                        <div class="post-thumbnail-content">
                            <a href="#">New costs and rise of the economy!</a>
                            <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                            <span class="post-category"><i class="fa fa-tag"></i>
                                Lifestyle</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                <div class="post-thumbnail-list">
                    <div class="post-thumbnail-entry">
                        <img alt="" src="{{asset('site/images/blog/thumbnail/7.jpg')}}">
                        <div class="post-thumbnail-content">
                            <a href="#">The most happiest time of the day!</a>
                            <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                            <span class="post-category"><i class="fa fa-tag"></i>
                                Lifestyle</span>
                        </div>
                    </div>
                    <div class="post-thumbnail-entry">
                        <img alt="" src="{{asset('site/images/blog/thumbnail/8.jpg')}}">
                        <div class="post-thumbnail-content">
                            <a href="#">New costs and rise of the economy!</a>
                            <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                            <span class="post-category"><i class="fa fa-tag"></i>
                                Lifestyle</span>
                        </div>
                    </div>
                    <div class="post-thumbnail-entry">
                        <img alt="" src="{{asset('site/images/blog/thumbnail/6.jpg')}}">
                        <div class="post-thumbnail-content">
                            <a href="#">Beautiful nature, and rare feathers!</a>
                            <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                            <span class="post-category"><i class="fa fa-tag"></i>
                                Lifestyle</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="widget widget-tweeter" data-username="envato" data-limit="2">
    <h4 class="widget-title">Recent Tweets</h4>
</div>


<div class="widget  widget-tags">
    <h4 class="widget-title">Tags</h4>
    <div class="tags">
        <a href="#">Design</a>
        <a href="#">Portfolio</a>
        <a href="#">Digital</a>
        <a href="#">Branding</a>
        <a href="#">HTML</a>
        <a href="#">Clean</a>
        <a href="#">Peace</a>
        <a href="#">Love</a>
        <a href="#">CSS3</a>
        <a href="#">jQuery</a>
    </div>
</div>