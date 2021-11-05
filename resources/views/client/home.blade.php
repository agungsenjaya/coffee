@extends('index')
@section('content')
<div class="min-vh-100 d-flex align-items-center">
    <div class="w-100">
<section class="space-m">
    <div class="container">
    <h1 class="title-4 display-4 my-0">Sunda Coffee<br> Beans Beverages</h1>
    <div class="line-divider"></div>
    </div>
</section>
<section class="space-m">
    <div class="container">
        <div class="row">
            @foreach($product->take(3) as $pro)
            <div class="col-md-4 mb-sm-0 mb-3">
                <a href="{{ route('product_view',['id' => $pro -> slug ]) }}" class="text-white">
                <div class="card rounded-0 border-0 bg-brown">
                    <div class="position-relative">
                        <img src="{{ $pro->img }}" alt="" width="100%" class="card-img-top rounded-0">
                        <div class="to-center grad-1"></div>
                    </div>
                    <div class="card-body">
                        <p class="mb-0 text-warnings title-3">Arabica</p>
                        <h5 class="title-1 text-capitalize text-white">{{ $pro->judul }}</h5>
                        <p class="title-3 opacity-75 small">{!! substr($pro->content, 0, 80) !!}..</p>
                    </div>
                    <div class="card-footer bg-warnings rounded-0 text-brown d-flex justify-content-between">
                        <div>
                            <p class="mb-0">Select Product</p>
                        </div>
                        <div>
                        <i class="las la-long-arrow-alt-right h5 m-0"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
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
@section('meta')
<title>Home | {{ config('app.name', 'Sunda Coffee Beans') }}</title>
@endsection