<nav class="navbar navbar-light bg-nav">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index.home') }}">
      <img src="{{ asset('img/logo.png') }}" alt="" width="60" class="">
    </a>
    <ul class="nav ms-auto mb-2 mb-lg-0 nav-top">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('index.home') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">Tentang kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('product') }}">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">Hubungi kami</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bahasa<img src="https://hatscripts.github.io/circle-flags/flags/id.svg" width="15" class="ms-3 border rounded-pill d-inline-block align-text-top">
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item justify-content-between d-flex" href="javascript:void(0)">Japan<img src="https://hatscripts.github.io/circle-flags/flags/jp.svg" width="15" class="d-inline-block align-text-top"></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item justify-content-between d-flex" href="javascript:void(0)">Indonesia<img src="https://hatscripts.github.io/circle-flags/flags/id.svg" width="15" class="d-inline-block align-text-top"></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item justify-content-between d-flex" href="javascript:void(0)">English<img src="https://hatscripts.github.io/circle-flags/flags/gb.svg" width="15" class="d-inline-block align-text-top"></a></li>
          </ul>
        </li>
      </ul>
  </div>
</nav>