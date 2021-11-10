@extends('index')
@section('content')
<section class="space-m min-vh-100">
    <div class="container text-center">
    <h1 class="title-4 display-5">404</h1>
    <p>Mohon maaf halaman yang anda tuju tidak ditemukan</p>
    <a href="{{ rotue('index.home') }}" class="btn btn-warnings">{{ translate('Kembali home')}}</a>
    </div>
</section>
@endsection