@extends('index')
@section('content')
<div class="min-vh-100 d-flex align-items-center">
    <div class="w-100">
<!-- <section class="space-m">
    <div class="container">
    <h1 class="title-4 display-4 my-0">Sunda Coffee<br> Beans Beverages</h1>
    <div class="line-divider"></div>
    </div>
</section> -->
<!-- {{ Route::currentRouteName() }} -->
<section class="space-m">
    <div class="container">

    <div class="swiper slider-1">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="https://dummyimage.com/1349x400" alt="" width="100%" class="rounded">
        </div>
        <div class="swiper-slide">
            <img src="https://dummyimage.com/1349x400" alt="" width="100%" class="rounded">
        </div>
        <div class="swiper-slide">
            <img src="https://dummyimage.com/1349x400" alt="" width="100%" class="rounded">
        </div>
      </div>
      <div class="swiper-pagination" style="position:initial !important;"></div>
    </div>
    </div>
</section>
<section class="space-m">
    <div class="container">
        <div class="card-deck">
            @foreach($product->take(3) as $pro)
            <a href="{{ route('product_view',['id' => $pro -> slug ]) }}" class="card card-pro">
                    <div class="position-relative">
                        <img src="{{ url('') . '/' . $pro->img }}" alt="" width="100%" class="card-img-top rounded-0">
                        <div class="to-center grad-1"></div>
                    </div>
                    <div class="card-body">
                        <p class="mb-0 text-warnings title-3">Arabica</p>
                        <h5 class="title-1 text-capitalize text-white">{{ $pro->judul }}</h5>
                        <p class="title-3 opacity-75 small">{!! translate(substr($pro->content, 0, 100)) !!}..</p>
                    </div>
                    <div class="card-footer bg-warnings rounded-0 text-brown d-flex justify-content-between">
                        <div>
                            <p class="mb-0">{{ translate('Selengkapnya')}}</p>
                        </div>
                        <div>
                        <i class="las la-long-arrow-alt-right h5 m-0"></i>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
</div>
</div>
@endsection
@section('css')
<style>
    /* body {
        background: url('../img/bg-home.png');
        background-position: top right;
        background-size: cover;
    } */
</style>
@endsection
@section('js')
<script>
    var swiper = new Swiper(".slider-1", {
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
</script>
@endsection
@section('meta')
<title>{{ translate('Beranda')}} | {{ config('app.name', 'Sunda Coffee Beans') }}</title>
@endsection