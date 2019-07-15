<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{ $blogs->judul }}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ url('public/blog/css/base.css') }}">
    <link rel="stylesheet" href="{{ url('public/blog/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ url('public/blog/css/main.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ url('public/blog/js/modernizr.js') }}"></script>

    <!-- favicons
    ================================================== 
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">-->

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header header">

        <div class="header__logo">
            <a class="logo" href="{{ url('/') }}">
                <h3 class="entry__header-title display-1"><i class="fa fa-angle-left"></i> Home</h3>
            </a>
        </div> <!-- end header__logo -->

    </header> <!-- s-header -->


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding s-content--narrow">

        <article class="row entry format-standard">

            <div class="entry__media col-full" align="center">
                <div class="entry__post-thumb">
                    <img src="{{ URL::to('/public/images/post') }}/{{ $blogs->image }}"
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </div>
            </div>

            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                    {{ $blogs->judul }}
                </h1>
                <ul class="entry__header-meta">
                    <li class="date">{{ $blogs->created_at }}</li>
                </ul>
            </div>

            <div class="col-full entry__main" align="justify">

                {!! $blogs->konten !!}

            </div> <!-- s-entry__main -->

        </article> <!-- end entry/article -->


        <div class="s-content__entry-nav">
            <div class="row s-content__nav">
                <div class="col-six s-content__prev">
                    <a href="#0" rel="prev">
                        <span>Previous Post</span>
                        The Pomodoro Technique Really Works. 
                    </a>
                </div>
                <div class="col-six s-content__next">
                    <a href="#0" rel="next">
                        <span>Next Post</span>
                        3 Benefits of Minimalism In Interior Design.
                    </a>
                </div>
            </div>
        </div> <!-- end s-content__pagenav -->

    </section> <!-- end s-content -->

    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__bottom">
            <div class="row">

                <div class="col-six">
                    <div class="s-footer__copyright">
                        <span>© Copyright Gunung Slamet. All Rights Reserved</span>
                    </div>
                </div>

                <div class="col-six">
                    <ul class="footer-social pull-right">
                        <li>
                            <a href="#0"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div> <!-- end s-footer__bottom -->

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="{{ url('public/blog/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('public/blog/js/plugins.js') }}"></script>
    <script src="{{ url('public/blog/js/main.js') }}"></script>

</body>

</html>