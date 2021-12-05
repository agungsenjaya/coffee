<nav class="navbar navbar-light bg-nav">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index.home') }}">
      <img src="{{ asset('img/logo.png') }}" alt="" width="60" class="">
    </a>
    <!-- Menu Website -->
    <div class="d-none d-sm-block">
    <ul class="nav ms-auto mb-2 mb-lg-0 nav-top">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('index.home') }}">{{ translate('Beranda')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">{{ translate('Tentang kami')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('product') }}">{{ translate('Produk')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">{{ translate('Hubungi kami')}}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ translate('Bahasa')}}
            @if(LaravelLocalization::getCurrentLocale() == 'id')
            <img src="https://hatscripts.github.io/circle-flags/flags/id.svg" width="15" class="ms-3 border rounded-pill d-inline-block align-text-top">
            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
            <img src="https://hatscripts.github.io/circle-flags/flags/gb.svg" width="15" class="ms-3 border rounded-pill d-inline-block align-text-top">
            @elseif(LaravelLocalization::getCurrentLocale() == 'ja')
            <img src="https://hatscripts.github.io/circle-flags/flags/jp.svg" width="15" class="ms-3 border rounded-pill d-inline-block align-text-top">
            @endif
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item justify-content-between d-flex" href="{{ LaravelLocalization::getLocalizedURL('ja') }}">Japan<img src="https://hatscripts.github.io/circle-flags/flags/jp.svg" width="15" class="d-inline-block align-text-top"></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item justify-content-between d-flex" href="{{ LaravelLocalization::getLocalizedURL('id') }}">Indonesia<img src="https://hatscripts.github.io/circle-flags/flags/id.svg" width="15" class="d-inline-block align-text-top"></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item justify-content-between d-flex" href="{{ LaravelLocalization::getLocalizedURL('en') }}">English<img src="https://hatscripts.github.io/circle-flags/flags/gb.svg" width="15" class="d-inline-block align-text-top"></a></li>
          </ul>
        </li>
      </ul>
      </div>
      <!-- Menu Mobile Responsive -->
      <div class="d-sm-none d-block">
        <div type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile" aria-controls="mobile" class="me-2">
          <i class="bi bi-list h2"></i>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="mobile" aria-labelledby="mobileLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="mobileLabel">Menus</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

        <div class="list-group list-group-flush">
          <a href="{{ route('index.home') }}" class="list-group-item list-group-item-action">{{ translate('Beranda') }}</a>
          <a href="{{ route('about') }}" class="list-group-item list-group-item-action">{{ translate('Tentang kami') }}</a>
        </div>
          
        </div>
      </div>

      </div>
  </div>
</nav>