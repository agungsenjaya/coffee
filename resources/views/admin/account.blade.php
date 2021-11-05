@extends('layouts.app')
@section('content')
<div class="offset-md-2">
<section class="p-3">
<div class="row">
    <div class="col-md-6">
        <div class="card">
        <div class="card-header d-flex justify-content-between p-3">Detail Account</div>
            <div class="card-body">
                <table class="table line-2">
                    <tbody>
                        <tr>
                            <td>Account</td>
                            <td>:</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td>:</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr class="border-transparent">
                            <td>Status</td>
                            <td>:</td>
                            <td>
                                <span class="badge bg-warning text-brown">
                                    <i class="bi bi-check-circle-fill me-1"></i>Admin
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<div class="col-md-6">
<div class="card">
    <div class="card-header d-flex justify-content-between p-3">
            <div>New Password</div>
        </div>
        <div class="card-body">
        <form method="POST" action="{{ route('update.account',['id' => Auth::user()->id ]) }}">
            @csrf
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-warning">Update Now</button>
        </form>
        </div>
    </div>
    </div>
    </div>
</section>
</div>
@endsection
