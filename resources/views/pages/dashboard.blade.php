@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Selamat Datang di Dashboard</h4>
                <p class="card-text">Ini adalah tampilan awal sistem Packing Palet kamu.</p>
                <hr>
                <div class="row text-center">
                    <div class="col-md-4">
                        <h5>Total Produk</h5>
                        <h2>120</h2>
                    </div>
                    <div class="col-md-4">
                        <h5>Stock Masuk Hari Ini</h5>
                        <h2>45</h2>
                    </div>
                    <div class="col-md-4">
                        <h5>Stock Keluar Hari Ini</h5>
                        <h2>32</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
