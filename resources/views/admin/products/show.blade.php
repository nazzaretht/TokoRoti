@extends('layouts.admin')

@section('title', 'Detail Produk')

@section('content')
<div class="card">
    <div class="card-header">Detail Produk</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}" alt="Gambar" class="img-fluid rounded">
                @else
                    <span class="text-muted">Tidak ada gambar</span>
                @endif
            </div>
            <div class="col-md-8">
                <h3>{{ $product->name }}</h3>
                <p><strong>Kategori:</strong> {{ $product->category->name ?? '-' }}</p>
                <p><strong>Harga:</strong> Rp {{ number_format($product->price,0,',','.') }}</p>
                <p><strong>Stok:</strong> {{ $product->stock }}</p>
                <p><strong>Status:</strong>
                    <span class="badge {{ $product->status ? 'bg-success' : 'bg-secondary' }}">
                        {{ $product->status ? 'Aktif' : 'Nonaktif' }}
                    </span>
                </p>
                <p><strong>Deskripsi:</strong><br>{{ $product->description }}</p>
                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection