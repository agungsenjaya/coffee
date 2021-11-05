@extends('layouts.app')
@section('content')
<div class="offset-md-2">
<section class="p-3">
    <div class="row">
        <div class="col-md-6">
        <div class="card bg-warnings-light h-100 border-0">
            <div class="card-body h-100 d-flex align-items-center justify-content-center">
                <div class="text-brown">
                    <h5 class="title-2 mb-0 text-capitalize">Selamat datang di dashboard admin</h5>
                    <p>Sunda Coffee Beans Company</p>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-brown">
            <div class="card-header d-flex justify-content-between text-white title-3">
                <div>
                     Products
                </div>
                <div>
                    <i class="ms-Icon ms-Icon--Coffee d-inline-block align-text-center"></i>
                </div>
                </div>
                <div class="card-body text-center">
                    <h1 class="display-4 mb-0 text-warning"><span class="title-2">{{ counting(count($product)) }}</span></h1>
                    <p class="small text-white title-1">Total Products</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-brown">
            <div class="card-header d-flex justify-content-between text-white title-3">
                <div>
                     User Admin
                </div>
                <div>
                    <i class="ms-Icon ms-Icon--ReminderPerson d-inline-block align-text-center"></i>
                </div>
                </div>
                <div class="card-body text-center">
                    <h1 class="display-4 mb-0 text-warning"><span class="title-2">{{ counting(count($user)) }}</span></h1>
                    <p class="small text-white title-1">Total Accounts</p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <h5 class="title-1">Product Terbaru</h5>
            </div>
            <div>
                <a class="text-warnings" href="{{ route('index.product') }}">Product lainnya</a>
            </div>
        </div>

        <div class="row">
        @foreach($product->take(4) as $pro)
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between">
                    <div class="align-self-center">
                        <p class="mb-0 text-secondary">
                            Arabica
                        </p>
                    </div>
                    <div>
                <button type="button" class="btn-icon btn-warning border-0" data-bs-toggle="dropdown" aria-expanded="false">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
    </svg>
  </button>
  <ul class="dropdown-menu dropdown-menu-end mt-2 dropdown-menu-dark title-3">
    <li><a href="{{ route('edit.product',['id' => $pro -> id]) }}" class="dropdown-item"><i class="bi bi-pencil-square me-2"></i> Edit</a></li>
    <li><a href="#" class="dropdown-item"><i class="bi bi-eye me-2"></i> Preview</a></li>
    <li><a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-{{ $pro->id }}"><i class="bi bi-trash me-2"></i> Delete</a></li>
  </ul>

  <!-- Modal -->
<div class="modal fade" id="modal-{{ $pro->id }}" tabindex="-1" aria-labelledby="modal-{{ $pro->id }}Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="modal-{{ $pro->id }}Label">Notifications</p>
        <button type="button" class="btn-close bg-warning" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan menghapus produk <span class="title-1 text-capitalize">{{ $pro->judul }}</span>? produk akan di hapus secara permanen</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-brown" data-bs-dismiss="modal">Close</button>
        <a href="{{ route('delete.product',['id' => $pro -> id]) }}" class="btn btn-warning">Delete</a>
      </div>
    </div>
  </div>
</div>

                </div>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="https://dummyimage.com/600x600" alt="" width="70%" class="rounded-pill">
                    </div>
                    <h6 class="title-2 text-capitalize">{{ $pro->judul }}</h6>
                    <p class="card-text small">{!! substr($pro->content, 0 , 50) !!}..</p>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>

    </div>
</section>
</div>
@endsection
