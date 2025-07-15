@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                        <div class="col-4 col-sm-3 col-xl-2">
                            <img src="/assets/dashboard/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                        </div>
                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                            <h4 class="mb-1 mb-sm-0">Detail Voucher</h4>
                            <p class="mb-0 font-weight-normal d-none d-sm-block">Informasi lengkap voucher diskon</p>
                        </div>
                        <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                            <span>
                                <a href="{{ route('vouchers.edit', $voucher->id) }}" class="btn btn-warning btn-rounded get-started-btn me-2">
                                    <i class="mdi mdi-pencil"></i> Edit
                                </a>
                                <a href="{{ route('vouchers.index') }}" class="btn btn-outline-light btn-rounded get-started-btn">
                                    <i class="mdi mdi-arrow-left"></i> Kembali
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-12 text-center">
                            <div class="p-4 border rounded bg-light">
                                <h3 class="text-primary">{{ $voucher->code }}</h3>
                                <p class="mb-0">{{ $voucher->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Informasi Diskon</h5>
                                    <table class="table table-borderless">
                                        <tr>
                                            <th width="40%">Tipe Diskon</th>
                                            <td>
                                                @if ($voucher->type == 'percentage')
                                                    <span class="badge badge-info">Persentase</span>
                                                @else
                                                    <span class="badge badge-info">Nominal</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nilai</th>
                                            <td>
                                                @if ($voucher->type == 'percentage')
                                                    {{ $voucher->value }}%
                                                    @if ($voucher->max_discount)
                                                        <br><small>Maks: Rp {{ number_format($voucher->max_discount, 0, ',', '.') }}</small>
                                                    @endif
                                                @else
                                                    Rp {{ number_format($voucher->value, 0, ',', '.') }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Min. Pemesanan</th>
                                            <td>
                                                @if ($voucher->min_order)
                                                    Rp {{ number_format($voucher->min_order, 0, ',', '.') }}
                                                @else
                                                    <span class="text-muted">Tidak ada</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Batas Penggunaan</th>
                                            <td>
                                                @if ($voucher->usage_limit)
                                                    {{ $voucher->used_count }} / {{ $voucher->usage_limit }}
                                                @else
                                                    {{ $voucher->used_count }} <span class="text-muted">(Tidak terbatas)</span>
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Informasi Periode</h5>
                                    <table class="table table-borderless">
                                        <tr>
                                            <th width="40%">Tanggal Mulai</th>
                                            <td>{{ $voucher->start_date->format('d M Y, H:i') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Berakhir</th>
                                            <td>{{ $voucher->end_date->format('d M Y, H:i') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                @if ($voucher->is_active)
                                                    <span class="badge badge-success">Aktif</span>
                                                @else
                                                    <span class="badge badge-secondary">Nonaktif</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Status Validitas</th>
                                            <td>
                                                @if ($voucher->isValid())
                                                    <span class="badge badge-success">Valid</span>
                                                @else
                                                    <span class="badge badge-danger">Tidak Valid</span>
                                                    <br>
                                                    @if (!$voucher->is_active)
                                                        <small class="text-danger">Voucher tidak aktif</small>
                                                    @elseif (now() < $voucher->start_date)
                                                        <small class="text-danger">Voucher belum berlaku</small>
                                                    @elseif (now() > $voucher->end_date)
                                                        <small class="text-danger">Voucher sudah berakhir</small>
                                                    @elseif ($voucher->usage_limit !== null && $voucher->used_count >= $voucher->usage_limit)
                                                        <small class="text-danger">Batas penggunaan tercapai</small>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Aksi</h5>
                                    <form action="{{ route('vouchers.destroy', $voucher->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus voucher ini?')">
                                            <i class="mdi mdi-delete"></i> Hapus Voucher
                                        </button>
                                    </form>
                                    
                                    <form action="{{ route('vouchers.toggle-status', $voucher->id) }}" method="POST" class="d-inline ml-2">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn {{ $voucher->is_active ? 'btn-secondary' : 'btn-success' }}">
                                            <i class="mdi {{ $voucher->is_active ? 'mdi-toggle-switch-off' : 'mdi-toggle-switch' }}"></i> 
                                            {{ $voucher->is_active ? 'Nonaktifkan' : 'Aktifkan' }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
