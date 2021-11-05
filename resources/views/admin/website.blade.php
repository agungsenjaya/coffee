@extends('layouts.app')
@section('content')
<div class="offset-md-2">
<section class="p-3">
    <div class="card">
    <div class="card-header d-flex justify-content-between p-3">
            Detail Website
        </div>
        <div class="card-body">
            <table class="table line-2">
                <tr>
                    <td>Name Web</td>
                    <td>:</td>
                    <td>{{ config('app.name') }}</td>
                </tr>
                <tr>
                    <td>Domain</td>
                    <td>:</td>
                    <td>{{ config('app.url') }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>info@sundacoffeebeans.jp</td>
                </tr>
                <tr>
                    <td>Company</td>
                    <td>:</td>
                    <td>PT. Sunda Coffee Beans</td>
                </tr>
                <tr>
                    <td>Languange</td>
                    <td>:</td>
                    <td>Indonesia, English, Japan</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr class="border-transparent">
                    <td>Address</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="mt-3">
        <a href="{{ config('app.url') }}" target="_blank" class="btn btn-warning">Visit website</a>
    </div>
</section>
</div>
@endsection
