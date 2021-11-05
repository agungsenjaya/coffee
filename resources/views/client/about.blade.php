@extends('index')
@section('content')
<section class="space-m">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1">
                <h1 class="title-4 display-5">Tentang sunda <br> coffee beans</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic reiciendis, esse, natus iusto laudantium quidem iste saepe dolorum eum cumque dolor amet voluptate laboriosam eaque aut accusantium animi? Aliquid, similique.</p>
                <a href="#" class="btn btn-warnings"><i class="bi bi-file-earmark-pdf me-2"></i>Detail Company</a>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center">
                <img src="{{ asset('img/bg-about.png') }}" alt="" width="70%" class="rounded">
            </div>
        </div>
    </div>
</section>
<section class="space-m">
    <div class="container">
        <div class="d-flex justify-content-between mb-4">
                <div>
                    <h1 class="title-4 my-0">Produk kami</h1>
                    <div class="line-divider-2"></div>
                </div>
                <div>
                    <a href="{{ route('product') }}" class="text-brown title-2 small"><u>Produk lainnya</u></a>
                </div>
            </div>
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
                        <p class="title-3 opacity-75 small">{{ substr($pro->content, 0, 80) }}..</p>
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
<section class="space-m bg-warnings-light">
    <div class="container">
    <div class="mb-4">
        <h1 class="title-4 my-0 text-brown text-center">Pelanggan Kami</h1>
        <div class="justify-content-center d-flex ">
            <div class="line-divider-2"></div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-md-3 mb-4">
            <img src="https://dummyimage.com/600x400" alt="" width="100%" class="rounded">
        </div>
        <div class="col-md-3 mb-4">
            <img src="https://dummyimage.com/600x400" alt="" width="100%" class="rounded">
        </div>
        <div class="col-md-3 mb-4">
            <img src="https://dummyimage.com/600x400" alt="" width="100%" class="rounded">
        </div>
        <div class="col-md-3 mb-4">
            <img src="https://dummyimage.com/600x400" alt="" width="100%" class="rounded">
        </div>
    </div> -->
    <img src="https://p-airnz.com/cms/assets/Common-Assets/Partner-Logos/marriott-all-logos-2100x488__ScaleMaxWidthWzkzMF0.png" alt="" width="100%">
    <div class="mt-5 text-center">
        <a href="#" class="btn btn-warnings">How To Order</a>
    </div>
    </div>
</section>
<section class="space-xl">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1 align-self-center">
            <div class="mb-3">
                <h1 class="title-4 my-0">Info lebih lanjut</h1>
                <div class="line-divider-2"></div>
            </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic reiciendis, esse, natus iusto laudantium quidem iste saepe dolorum eum cumque dolor amet voluptate laboriosam eaque aut accusantium animi? Aliquid, similique.</p>
                <a href="#" class="btn btn-warnings">Hubungi Kami</a>
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <!-- <img src="{{ asset('img/bg-about-2.png') }}" alt="" width="100%" class="rounded"> -->
                <div class="bg-warnings-light rounded">
                    <img src="{{ asset('img/bg-contact.png') }}" alt="" width="100%" class="rounded">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('meta')
<title>About Us | {{ config('app.name', 'Sunda Coffee Beans') }}</title>
@endsection