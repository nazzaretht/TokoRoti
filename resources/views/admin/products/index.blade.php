<!-- filepath: resources/views/admin/products/index.blade.php -->
@extends('layouts.admin')

@section('title', 'Produk')

@section('content')
<div class="row mb-2" data-aos="fade-down">
    <div class="col-12 text-center">
        <h2 class="mb-3">Daftar Produk</h2>
    </div>
</div>
<div class="row mb-3 align-items-center" data-aos="fade-down">
    <div class="col-12 d-flex flex-column flex-md-row justify-content-between gap-2">
        <form method="GET" action="{{ route('admin.products.index') }}" class="flex-grow-1 order-1 order-md-0" style="max-width: 75%;">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari produk..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
                @if(request('search'))
                    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-danger">Reset</a>
                @endif
            </div>
        </form>
        <div class="d-flex justify-content-md-end align-items-center order-0 order-md-1" style="width: 25%;">
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary shadow-sm w-100 w-md-auto">
                <i class="bi bi-plus-circle"></i> Tambah Produk
            </a>
        </div>
    </div>
</div>
@if(request('search'))
    <div class="alert alert-info mb-3" data-aos="fade-up">
        Hasil pencarian untuk: <strong>{{ request('search') }}</strong>
    </div>
@endif

<div class="table-responsive" data-aos="zoom-in">
    <table class="table table-striped table-hover align-middle shadow-sm rounded">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Status</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $i => $product)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>
                    <div class="d-flex align-items-center">
                        @if($product->image)
                            <img src="{{ asset('storage/'.$product->image) }}" alt="Gambar" class="rounded me-2" width="40" height="40" style="object-fit:cover;">
                        @endif
                        <span>{{ $product->name }}</span>
                    </div>
                </td>
                <td>{{ $product->stock }}</td>
                <td>Rp {{ number_format($product->price,0,',','.') }}</td>
                <td>{{ $product->category->name ?? '-' }}</td>
                <td>
                    <span class="badge {{ $product->status ? 'bg-success' : 'bg-secondary' }}">
                        {{ $product->status ? 'Aktif' : 'Nonaktif' }}
                    </span>
                </td>
                <td class="text-center">
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-warning mb-1 mb-md-0">Edit</a>
                    <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-sm btn-info mb-1 mb-md-0">Detail</a>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus produk?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Tidak ada produk ditemukan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection