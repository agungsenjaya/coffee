@extends('index')
@section('content')
<section class="space-m bg-warnings-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1">
                <h1 class="title-4 display-5">Produk Kami</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic reiciendis, esse, natus iusto laudantium quidem iste saepe dolorum eum cumque dolor amet voluptate laboriosam eaque aut accusantium animi? Aliquid, similique.</p>
                <a href="#" class="btn btn-warnings">Hubungi Kami</a>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center">
                <img src="{{ asset('img/bg-product.png') }}" alt="" width="60%" class="rounded">
            </div>
        </div>
    </div>
</section>
<section class="space-m">
    <div class="container">
    <div class="row">
    @foreach($product as $pro)
            <div class="col-md-4 mb-3">
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
@endsection