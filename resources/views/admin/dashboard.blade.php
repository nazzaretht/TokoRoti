@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row g-3 mb-4">
    <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
        <div class="card shadow border-0 text-bg-primary h-100">
            <div class="card-body text-center">
                <div class="mb-2">
                    <i class="bi bi-basket2-fill fs-1"></i>
                </div>
                <h6 class="card-title mb-1">Total Order</h6>
                <p class="card-text fs-3 fw-bold">{{ $totalOrders ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
        <div class="card shadow border-0 text-bg-success h-100">
            <div class="card-body text-center">
                <div class="mb-2">
                    <i class="bi bi-cash-stack fs-1"></i>
                </div>
                <h6 class="card-title mb-1">Total Sales</h6>
                <p class="card-text fs-3 fw-bold">Rp {{ number_format($totalSales ?? 0,0,',','.') }}</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card shadow border-0 text-bg-warning h-100">
            <div class="card-body text-center">
                <div class="mb-2">
                    <i class="bi bi-cupcake fs-1"></i>
                </div>
                <h6 class="card-title mb-1">Produk</h6>
                <p class="card-text fs-3 fw-bold">{{ $totalProducts ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
        <div class="card shadow border-0 text-bg-info h-100">
            <div class="card-body text-center">
                <div class="mb-2">
                    <i class="bi bi-people-fill fs-1"></i>
                </div>
                <h6 class="card-title mb-1">User</h6>
                <p class="card-text fs-3 fw-bold">{{ $totalUsers ?? 0 }}</p>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-12 col-lg-8" data-aos="fade-right" data-aos-delay="500">
        <div class="card shadow border-0 h-100">
            <div class="card-header bg-white fw-bold">
                <i class="bi bi-graph-up-arrow me-2"></i> Statistik Penjualan Bulanan
            </div>
            <div class="card-body">
                {{-- Placeholder grafik, ganti dengan chart.js jika ingin dinamis --}}
                <div class="text-center text-muted py-5">
                    <i class="bi bi-bar-chart fs-1"></i>
                    <div>Grafik penjualan akan tampil di sini</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-delay="600">
        <div class="card shadow border-0 h-100">
            <div class="card-header bg-white fw-bold">
                <i class="bi bi-cup-straw me-2"></i> Produk Terlaris
            </div>
            <div class="card-body">
                {{-- Placeholder produk terlaris --}}
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Roti Tawar <span class="badge bg-primary rounded-pill">120</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Bolu Coklat <span class="badge bg-primary rounded-pill">98</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Snack Kentang <span class="badge bg-primary rounded-pill">75</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Jely Mangga <span class="badge bg-primary rounded-pill">60</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection