@extends('layouts.app')

@section('content')
<div class="container mt-4 mb-5">
    <div class="card shadow-sm">
        <div class="card-body text-white" style="background-color: #478CCF;">
            <h2 class="text-center mb-4">Detail Pendaftaran Beasiswa</h2>

            <div class="card">
                <div class="card-body text-dark">
                    <h5 class="card-title">Informasi Pendaftaran</h5>
                    <hr>
                    <dl class="row">
                        <dt class="col-sm-4">Nama:</dt>
                        <dd class="col-sm-8">{{ $daftar->nama }}</dd>

                        <dt class="col-sm-4">Email:</dt>
                        <dd class="col-sm-8">{{ $daftar->email }}</dd>

                        <dt class="col-sm-4">Nomor HP:</dt>
                        <dd class="col-sm-8">{{ $daftar->no_hp }}</dd>

                        <dt class="col-sm-4">Semester Saat Ini:</dt>
                        <dd class="col-sm-8">{{ $daftar->semester }}</dd>

                        <dt class="col-sm-4">IPK Terakhir:</dt>
                        <dd class="col-sm-8">{{ $daftar->ipk }}</dd>

                        <dt class="col-sm-4">Pilihan Beasiswa:</dt>
                        <dd class="col-sm-8">{{ $daftar->pilihanbeasiswa }}</dd>

                        <dt class="col-sm-4">Berkas Syarat:</dt>
                        <dd class="col-sm-8">
                            <a href="{{ asset('' . $daftar->berkas) }}" target="_blank">Lihat Berkas</a>
                         </dd>

                        <dt class="col-sm-4">Status:</dt>
                        <dd class="col-sm-8">{{ $daftar->status }}</dd>
                    </dl>

                    <div class="text-center mt-3">
                        <a href="{{ route('pilihanbeasiswa') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
