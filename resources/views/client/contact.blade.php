@extends('index')
@section('content')
<div class="min-vh-100 bg-warnings-light align-items-center d-flex">
<div class="w-100">
    @if(Session::has('sc_alert'))
<div class="alert alert-success alert-dismissible fade show rounded-0 p-0" role="alert">
    <div class="container d-flex justify-content-between">
        <div class="align-self-center">
            {{ Session::get('sc_alert') }}
        </div>
        <div>
            <button type="button" class="btn-close position-relative" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
</div>
</div>
@endif
    <section class="space-m">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <!-- <img src="{{ asset('img/bg-contact.png') }}" alt="" width="100%" class="mb-4 rounded"> -->
                    <h1 class="title-4 display-5">Hubungi Kami</h1>
                    <div class="d-flex justify-content-start">
                        <div class="d-flex">
                            <div class="me-2">
                                <i class="lar la-envelope-open h2"></i>
                            </div>
                            <div>
                                <p class="m-0 small">Email Support</p>
                                <p class="title-4 m-0">info@sundacoffeebeans.jp</p>
                            </div>
                        </div>
                        <div class="d-flex ms-3 border-start border-brown ps-2">
                            <div class="me-2">
                                <i class="las la-phone-alt h2"></i>
                            </div>
                            <div>
                                <p class="m-0 small">Contact Support</p>
                                <p class="title-4 m-0">+62xxxxxxx</p>
                            </div>
                        </div>
                    </div>
                    <!-- <p class="title-4 mt-4">Official website sundacoffeebeans.jp</p> -->
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                        <form method="POST" action="{{ route('contact.send') }}">
                            @csrf
                        <div class="mb-3">
    <label for="nama" class="form-label title-1 small">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" name="name" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label title-1 small">Email address</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label title-1 small">Pesan</label>
    <textarea class="form-control" id="nama" cols="30" rows="5" name="pesan" required></textarea>
  </div>
  <button type="submit" class="btn btn-warnings">Submit Form</button>
</form>
                        </div>
                        <!-- <div class="card-footer"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
@endsection