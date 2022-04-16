@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Riwayat Transaksi</div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                            <thead class="thead-light">
                                <th scope="col">#</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Status Pembayaran</th>
                                <th scope="col">Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>#{{ $order->number }}</td>
                                        <td>Rp. {{ number_format($order->total_price, 2, ',', '.') }}</td>
                                        <td>
                                            @if ($order->payment_status == 1)
                                                Menunggu Pembayaran
                                            @elseif ($order->payment_status == 2)
                                                Sudah Dibayar
                                            @else
                                                Kadaluarsa
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-success">
                                                Lihat
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection