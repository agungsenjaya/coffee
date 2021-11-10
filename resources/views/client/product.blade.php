@extends('index')
@section('content')
<section class="space-m bg-warnings-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1">
                <h1 class="title-4 display-5">{{ translate('Produk Kami')}}</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat maxime assumenda eligendi consequuntur beatae non a, dolores nobis quas eos, maiores debitis vero fugit repudiandae vel iure explicabo aliquid quam.</p>
                <a href="{{ route('contact') }}" class="btn btn-warnings">{{ translate('Hubungi Kami')}}</a>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center">
                <img src="{{ asset('img/bg-product.png') }}" alt="" width="60%" class="rounded">
            </div>
        </div>
    </div>
</section>
<section class="space-m">
    <div class="container">
    <div class="card-deck">
    @foreach($product as $pro)
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
@endsection