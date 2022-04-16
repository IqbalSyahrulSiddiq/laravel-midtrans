@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Selamat datang!, ini adalah contoh aplikasi midtrans') }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Navigasi
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-md btn-primary">
                        Masuk ke halaman Midtrans
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
