@extends('main.index')
@section('main')
    <div class="page-header clear-filter" filter-color="orange" style="height: 0">
        <div class="justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block mx-auto" style="height: 100vh;width: 200vh" src="{{asset('main/assets/img/hinh-nen-full-hd-cho-laptop-5.jpg')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Anh hàng xóm may mắn</h5>
                            <button class="btn btn-primary btn-round">Đặt vé</button>
                            <button class="btn btn-info btn-round">Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" style="height: 100vh;width: 200vh" src="{{asset('main/assets/img/hinh-nen-full-hd-cho-laptop-5.jpg')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cô hàng xóm dú bự vl</h5>
                            <button class="btn btn-primary btn-round">Đặt vé</button>
                            <button class="btn btn-info btn-round">Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" style="height: 100vh;width: 200vh" src="{{asset('main/assets/img/hinh-nen-full-hd-cho-laptop-5.jpg')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cô chị gái của bạn gái đít bự chản</h5>
                            <button class="btn btn-primary btn-round">Đặt vé</button>
                            <button class="btn btn-info btn-round">Xem chi tiết</button>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <i class="now-ui-icons arrows-1_minimal-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <i class="now-ui-icons arrows-1_minimal-right"></i>
                </a>
            </div>

        </div>

    </div>

@endsection
