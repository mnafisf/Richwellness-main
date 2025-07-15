@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Kelola Voucher </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kelola Voucher</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Data Voucher</h4>
                        <a href="{{ route('vouchers.create') }}" class="btn btn-primary btn-fw">
                            <i class="mdi mdi-plus-circle-outline"></i> Tambah Voucher
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th> Kode </th>
                                    <th> Deskripsi </th>
                                    <th> Tipe </th>
                                    <th> Nilai </th>
                                    <th> Periode </th>
                                    <th> Status </th>
                                    <th> Penggunaan </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($vouchers as $voucher)
                                    <tr>
                                        <td> {{ $voucher->code }} </td>
                                        <td> {{ $voucher->description }} </td>
                                        <td>
                                            @if ($voucher->type == 'percentage')
                                                Persentase
                                            @else
                                                Nominal
                                            @endif
                                        </td>
                                        <td>
                                            @if ($voucher->type == 'percentage')
                                                {{ $voucher->value }}%
                                                @if ($voucher->max_discount)
                                                    <br><small class="text-muted">Maks: Rp {{ number_format($voucher->max_discount, 0, ',', '.') }}</small>
                                                @endif
                                            @else
                                                Rp {{ number_format($voucher->value, 0, ',', '.') }}
                                            @endif
                                            @if ($voucher->min_order)
                                                <br><small class="text-muted">Min: Rp {{ number_format($voucher->min_order, 0, ',', '.') }}</small>
                                            @endif
                                        </td>
                                        <td> {{ $voucher->start_date->format('d/m/Y') }} - {{ $voucher->end_date->format('d/m/Y') }} </td>
                                        <td>
                                            @if ($voucher->is_active)
                                                <div class="badge badge-outline-success">Aktif</div>
                                            @else
                                                <div class="badge badge-outline-danger">Nonaktif</div>
                                            @endif
                                        </td>
                                        <td> 
                                            {{ $voucher->used_count }}
                                            @if ($voucher->usage_limit)
                                                / {{ $voucher->usage_limit }}
                                            @else
                                                <span class="text-muted">(∞)</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('vouchers.show', $voucher->id) }}" class="btn btn-inverse-info btn-icon">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <a href="{{ route('vouchers.edit', $voucher->id) }}" class="btn btn-inverse-warning btn-icon">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                            <form action="{{ route('vouchers.destroy', $voucher->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-inverse-danger btn-icon" onclick="return confirm('Apakah Anda yakin ingin menghapus voucher ini?')">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Tidak ada data voucher</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{ $vouchers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
