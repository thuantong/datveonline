@extends('main.index')
@section('main')
<div class="bg-secondary" style="height: 11vh"></div>
<div class="breadcrumbs">
    <ul>
        <li>
            <a href="#">
                <i class="now-ui-icons shopping_shop"></i>
                <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 10px"></i>
            </a>
        </li>
        <li>
            <a href="#">
                Phim
                <i class="now-ui-icons arrows-1_minimal-right" style="font-size: 10px"></i>
            </a>
        </li>
        <li>
            <a href="#">
                Phim đang chiếu
            </a>
        </li>
    </ul>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6 mt-2">
                <h2>Phim đang chiếu</h2>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 shadow">
                <a href="#">
                    <div class="hot-rank text-center">HOT</div>
                    <div class="" style="position: relative">
                        <img class="mx-auto" src="{{asset('main/assets/img/bloodshot_cgv_1.jpg')}}" style="display: block;max-width: 185px;max-height: 260px;border: 1px black solid">

                    </div>
                    <h5 class="text-center">Con heo</h5>
                    <div class="">Thể loại</div>
                    <div class="">Thời lượng</div>
                    <div class="">Ngày chiếu</div>
                </a>

            </div>
            <div class="col-md-3">s</div>
            <div class="col-md-3">s</div>
            <div class="col-md-3">s</div>
        </div>


    </div>
</div>
    @endsection
