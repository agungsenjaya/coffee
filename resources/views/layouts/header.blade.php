<nav class="navbar navbar-light bg-nav">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index.home') }}">
      <img src="{{ asset('img/logo.png') }}" alt="" width="60" class="">
    </a>
    <!-- Menu Website -->
    <ul class="nav ms-auto mb-2 mb-lg-0 nav-top d-none d-sm-block">
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
      <!-- Menu Mobile Responsive -->
      <div class="d-sm-none d-block">
        <a href="javascript:void(0)">
          <i class="bi bi-menu"></i>
        </a>
      </div>
  </div>
</nav>