@extends('index')
@section('content')
<div class="bg-brown py-3">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="align-self-center">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 title-4 small">
                <li class="breadcrumb-item"><a href="{{ route('product') }}" class="text-warning">{{ translate('Product')}}</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">{{ $data->judul }}</li>
            </ol>
            </nav>
            </div>
        <div>
        <div class="a2a_kit a2a_kit_size_32 a2a_default_style justify-content-start d-flex">
            <div class="text-white title-4 me-3 small">{{ translate('Bagikan')}}</div>
            <div>
                <a class="a2a_button_twitter"></a>
                <a class="ms-2 a2a_button_facebook"></a>
                <a class="ms-2 a2a_button_whatsapp"></a>
                <a class="ms-2 a2a_button_telegram"></a>
                <a class="ms-2 a2a_button_linkedin"></a>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
<section class="space-m bg-warnings-light">
    <div class="container">
        <div class="row">
        <div class="col-md-10 offset-md-1">
        
            <div class="text-center">
                <p class="mb-0 title-1">Arabica</p>
                <h1 class="title-4 display-5 mt-0 mb-2">{{ $data->judul }}</h1>
            </div>
        
        </div>
        </div>
    </div>
</section>
<section class="space-m">
    <div class="container">
                <div class="row">
                    <!-- <div class="col-md-6 order-2 order-md-1">  -->
                    <div class="col-md-12"> 
                    <div class="mb-4">
                    <h1 class="title-4 my-0">{{ translate('Detail Produk') }}</h1>
                    <div class="line-divider-2"></div>
                </div>
                       <p class="">{!! translate($data->content) !!}</p>
                    </div>
                    <!-- <div class="col-md-6 order-1 order-md-2">
                <img src="{{ url('') . '/' . $data->img }}" alt="" width="100%" class="">
            </div> -->
                </div>
    </div>
</section>
<!-- 
<section class="space-m">
    <div class="container text-center">
        <a href="#" class="btn btn-warnings">Info Pemesanan</a>
    </div>
</section> -->
@endsection
@section('css')
<style>
    .a2a_default_style .a2a_svg { border-radius: 50rem !important; }
    .a2a_svg { padding:6px !important; }
</style>
@endsection
@section('js')
<script async src="https://static.addtoany.com/menu/page.js"></script>
<script>
    var a2a_config = a2a_config || {};
    // a2a_config.icon_color = "#2A241B";
    a2a_config.icon_color = "#dfab02, #2A241B";
    a2a_config.num_services = 4;
</script>
@endsection