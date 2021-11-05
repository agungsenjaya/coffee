@extends('layouts.app')
@section('content')
<div class="offset-md-2">
<section class="p-3">
    <div class="card">
        <div class="card-header d-flex justify-content-between p-3">
            <div>Form Edit Product</div>
            <div class="align-self-center">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('index.product') }}"class="text-greens">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
            </ol>
            </nav>
            </div>
        </div>
        <div class="card-body">
        <form method="POST" action="{{ route('update.product',['id' => $data -> id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="mb-3 col-6">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="judul" required value="{{ $data->judul }}">
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Gambar Produk</label>
                <input type="file" class="form-control" name="img" value="{{ $data->img }}">
            </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" id="editor" name="content" required>{{ $data->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-warning">Update Form</button>
            </form>
        </div>
    </div>
</section>
</div>
@endsection
@section('css')
<style>
    .ck.ck-editor__main .ck-content {
    height: 239px;
}
</style>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/31.0.0/ckeditor.js" integrity="sha512-PX/TmhDoQRhDOCRGHROXcgiYWUKuqF79zvF4M1b5xDjm/mzGsF6/tSzMlwYXSPdg4Z73dq4nKgf+5z9cOfpgMw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
        toolbar: [ 'bold', 'italic', 'link', 'undo', 'redo', 'numberedList', 'bulletedList' ]
    } )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection