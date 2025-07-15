@extends('resepsionis.layout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Dashboard Resepsionis</h4>
                        <p>Selamat datang, {{ Auth::user()->name }}!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
