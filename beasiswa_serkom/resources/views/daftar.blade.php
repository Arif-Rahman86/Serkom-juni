@extends('layouts.app')

@section('content')
<div class="container mt-4 mb-5">
    <div class="card shadow-sm">
        <div class="card-header text-center" style="background-color: #478CCF; color: #240750;">
            <h2 class="card-title text-center mb-0 simple-title">Form Pendaftaran Beasiswa</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('daftar.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="nama">Masukkan Nama:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}" required>
                    </div>
                    @error('nama')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="email">Masukkan Email:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email" value="{{ old('email') }}" required>
                    </div>
                    @error('email')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="nomorHp">Nomor HP:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="tel" class="form-control" id="nomorHp" placeholder="Nomor HP" name="no_hp" value="{{ old('no_hp') }}" required>
                    </div>
                    @error('no_hp')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="semester">Semester Saat Ini:</label>
                    <select class="form-control" id="semester" name="semester" onchange="calculateIpk()" required>
                        <option value="" {{ old('semester') == '' ? 'selected' : '' }}>Pilih</option>
                        @for ($i = 1; $i <= 8; $i++)
                            <option value="{{ $i }}" {{ old('semester') == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                    @error('semester')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="ipk">IPK Terakhir:</label>
                    <input type="text" class="form-control" id="ipk" placeholder="IPK" readonly name="ipk" value="{{ old('ipk') }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="pilihanBeasiswa">Pilihan Beasiswa:</label>
                    <select class="form-control" id="pilihanBeasiswa" name="pilihanbeasiswa" required disabled>
                        <option value="" {{ old('pilihanbeasiswa') == '' ? 'selected' : '' }}>Pilih</option>
                        <option value="Beasiswa Akademik" {{ old('pilihanbeasiswa') == 'Beasiswa Akademik' ? 'selected' : '' }}>Beasiswa Akademik</option>
                        <option value="Beasiswa Non-Akademik" {{ old('pilihanbeasiswa') == 'Beasiswa Non-Akademik' ? 'selected' : '' }}>Beasiswa Non-Akademik</option>
                        <option value="Beasiswa Penghargaan" {{ old('pilihanbeasiswa') == 'Beasiswa Penghargaan' ? 'selected' : '' }}>Beasiswa Penghargaan</option>
                    </select>
                    @error('pilihanbeasiswa')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="berkasSyarat">Upload Berkas Syarat:</label>
                    <input type="file" class="form-control-file" id="berkasSyarat" name="berkas" required disabled>
                    @error('berkas')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <button type="submit" class="btn btn-primary" id="daftarButton" disabled>Daftar</button>
                    <a href="{{ route('pilihanbeasiswa') }}" class="btn btn-secondary ml-2">Batal</a>
                </div>

                {{-- untuk menampilkan pesan error jika ada error saat validasi input pada form --}}
                @if ($errors->any()) 
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>

<script>
    // fungsi javascript untuk menentukan ipk berdasarkan semester
    document.addEventListener("DOMContentLoaded", function () {
        calculateIpk();
    });

    function calculateIpk() {
        var semester = document.getElementById("semester").value;
        var ipkInput = document.getElementById("ipk");
        var pilihanBeasiswa = document.getElementById("pilihanBeasiswa");
        var berkasSyarat = document.getElementById("berkasSyarat");
        var daftarButton = document.getElementById("daftarButton");

        var ipkMap = {
            1: 3.8,
            2: 3.9,
            3: 3.7,
            4: 3.4,
            5: 2.7,
            6: 2.9,
            7: 2.8,
            8: 3,
        };

        var calculatedIpk = semester !== '' ? ipkMap[semester] : '';
        ipkInput.value = calculatedIpk;

        if (semester === '' || calculatedIpk < 3.0) {
            pilihanBeasiswa.disabled = true;
            berkasSyarat.disabled = true;
            daftarButton.disabled = true;
        } else {
            pilihanBeasiswa.disabled = false;
            berkasSyarat.disabled = false;
            daftarButton.disabled = false;
            pilihanBeasiswa.focus();
        }
    }
</script>

@endsection

@section('styles')
<style>
    .btn-primary:hover {
        background-color: #478CCF;
        border-color: #478CCF;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(220, 76, 100, 0.5);
        background-color: #FFFFFF;
    }

    .card-header {
        background-color: #478CCF;
        color: #FFFFFF;
        border-bottom: none;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        padding: 20px;
    }

    .simple-title {
        font-family: 'Arial', sans-serif;
        font-weight: 600;
        font-size: 2rem;
        color: #478CCF;
    }
</style>
@endsection
