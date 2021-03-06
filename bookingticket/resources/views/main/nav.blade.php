<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent" color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/" rel="tooltip" data-placement="bottom" target="_blank">
                title
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                        <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                        <p>Download</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                        <i class="now-ui-icons design_app"></i>
                        <p>Phim</p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item" href="/phim">
                            <i class="now-ui-icons business_chart-pie-36"></i> Sex
                        </a>
                        <a class="dropdown-item" href="/phim">
                            <i class="now-ui-icons design_bullet-list-67"></i> Khỏa thân
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Rạp chiếu phim
                    </a>
                </li>
{{--                 target="_blank" chuyển trang--}}
                <li class="nav-item">
                    <a class="nav-link btn btn-neutral" href="{{route('login')}}">
                        <i class="now-ui-icons arrows-1_share-66"></i>
                        <p>Đăng nhập</p>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">--}}
{{--                        <i class="fab fa-twitter"></i>--}}
{{--                        <p class="d-lg-none d-xl-none">Twitter</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">--}}
{{--                        <i class="fab fa-facebook-square"></i>--}}
{{--                        <p class="d-lg-none d-xl-none">Facebook</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">--}}
{{--                        <i class="fab fa-instagram"></i>--}}
{{--                        <p class="d-lg-none d-xl-none">Instagram</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</nav>
