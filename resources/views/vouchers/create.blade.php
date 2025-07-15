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
                            <h4 class="mb-1 mb-sm-0">Tambah Voucher Baru</h4>
                            <p class="mb-0 font-weight-normal d-none d-sm-block">Buat voucher diskon baru untuk pelanggan</p>
                        </div>
                        <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                            <span>
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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('vouchers.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="code">Kode Voucher</label>
                            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}" placeholder="Masukkan kode voucher atau biarkan kosong untuk generate otomatis">
                            <small class="form-text text-muted">Biarkan kosong untuk generate kode otomatis</small>
                            @error('code')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}" required>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type">Tipe Diskon</label>
                            <select class="form-control @error('type') is-invalid @enderror" id="type" name="type" required>
                                <option value="">Pilih Tipe Diskon</option>
                                <option value="percentage" {{ old('type') == 'percentage' ? 'selected' : '' }}>Persentase (%)</option>
                                <option value="fixed" {{ old('type') == 'fixed' ? 'selected' : '' }}>Nominal (Rp)</option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="value">Nilai Diskon</label>
                            <div class="input-group">
                                <input type="number" step="0.01" class="form-control @error('value') is-invalid @enderror" id="value" name="value" value="{{ old('value') }}" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="valueSymbol">Rp</span>
                                </div>
                            </div>
                            @error('value')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="min_order">Minimal Pemesanan (opsional)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" step="0.01" class="form-control @error('min_order') is-invalid @enderror" id="min_order" name="min_order" value="{{ old('min_order') }}">
                            </div>
                            @error('min_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group" id="maxDiscountContainer">
                            <label for="max_discount">Maksimal Diskon (opsional)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" step="0.01" class="form-control @error('max_discount') is-invalid @enderror" id="max_discount" name="max_discount" value="{{ old('max_discount') }}">
                            </div>
                            <small class="form-text text-muted">Hanya berlaku untuk diskon persentase</small>
                            @error('max_discount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="usage_limit">Batas Penggunaan (opsional)</label>
                            <input type="number" class="form-control @error('usage_limit') is-invalid @enderror" id="usage_limit" name="usage_limit" value="{{ old('usage_limit') }}">
                            <small class="form-text text-muted">Biarkan kosong untuk penggunaan tidak terbatas</small>
                            @error('usage_limit')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="start_date">Tanggal Mulai</label>
                                    <input type="datetime-local" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ old('start_date') }}" required>
                                    @error('start_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="end_date">Tanggal Berakhir</label>
                                    <input type="datetime-local" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ old('end_date') }}" required>
                                    @error('end_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', '1') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">Aktif</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Simpan Voucher</button>
                        <a href="{{ route('vouchers.index') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const typeSelect = document.getElementById('type');
        const valueSymbol = document.getElementById('valueSymbol');
        const maxDiscountContainer = document.getElementById('maxDiscountContainer');
        
        function updateSymbol() {
            if (typeSelect.value === 'percentage') {
                valueSymbol.textContent = '%';
                maxDiscountContainer.style.display = 'block';
            } else {
                valueSymbol.textContent = 'Rp';
                maxDiscountContainer.style.display = 'none';
            }
        }
        
        typeSelect.addEventListener('change', updateSymbol);
        updateSymbol();
    });
</script>
@endsection
