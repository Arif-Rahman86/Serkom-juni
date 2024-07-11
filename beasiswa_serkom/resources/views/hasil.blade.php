@extends('layouts.app')

@section('content')

<div class="container mt-4 mb-5">
    <div class="card shadow-sm">
        <div class="card-header text-center" style="background-color: #478CCF; color: #240750;">
            <h2 class="elegant-title">Hasil Pendaftaran</h2>
        </div>
        <div class="card-body">
            @if ($daftarItems->count() > 0)
                <table class="table table-striped table-hover table-bordered mt-4">
                    <thead style="background-color: #478CCF; color: #240750;">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor HP</th>
                            <th>Semester</th>
                            <th>IPK</th>
                            <th>Pilihan Beasiswa</th>
                            <th>Berkas</th> <!-- Added column for the file -->
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftarItems as $daftar)
                            <tr>
                                <td>{{ $daftar->nama }}</td>
                                <td>{{ $daftar->email }}</td>
                                <td>{{ $daftar->no_hp }}</td>
                                <td>{{ $daftar->semester }}</td>
                                <td>{{ $daftar->ipk }}</td>
                                <td>{{ $daftar->pilihanbeasiswa }}</td>
                                <td class="text-center">
                                    <a href="{{ asset('' . $daftar->berkas) }}" target="_blank" style="color: #DC3545;">
                                        <i class="fas fa-file-alt"></i> Lihat Berkas
                                    </a>
                                </td>
                                <td>
                                    @if ($daftar->status == 'Diterima')
                                        <span class="badge badge-success">{{ $daftar->status }}</span>
                                    @elseif ($daftar->status == 'Ditolak')
                                        <span class="badge badge-danger">{{ $daftar->status }}</span>
                                    @else
                                        <span class="badge badge-warning">{{ $daftar->status }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-center">Tidak ada data pendaftaran.</p>
            @endif
        </div>
    </div>
</div>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@endsection

@section('styles')
<style>
    .btn-primary:hover {
        background-color: #4535C1;
        border-color: #fff;
    }

    .card-shadow {
        box-shadow: 0 0 10px rgba(220, 76, 100, 0.5);
    }

    .container {
        padding-bottom: 50px; /* Added padding at the bottom */
    }

    .elegant-title {
        font-family: 'Georgia', serif;
        font-weight: bold;
        font-size: 2.5rem;
        color: white; /* Changed title color to white */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        position: relative;
        display: inline-block;
        margin-top: 20px; /* Adjusted top margin for spacing */
    }

    .elegant-title::after {
        content: '';
        position: absolute;
        width: 80%;
        height: 4px;
        background-color: white; /* Changed underline color to white */
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 2px;
    }
</style>
@endsection
