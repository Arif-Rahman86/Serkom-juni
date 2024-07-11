@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4 simple-title">Daftar Pilihan Beasiswa</h2>

    <div class="card-deck">
        <div class="card shadow-sm">
            <img src="{{ asset('/image/akademik1.jpg') }}" class="card-img-top w-100" alt="Beasiswa Akademik Image">
            <div class="card-body text-center">
                <h5 class="card-title mt-4">Beasiswa Akademik</h5>
                <p class="card-text">Beasiswa untuk prestasi akademik.</p>
                <a href="#" class="btn btn-primary mt-3" data-toggle="modal" data-target="#akademikModal">Detail</a>
            </div>
        </div>

        <div class="card shadow-sm">
            <img src="{{ asset('/image/non-akademik.jpg') }}" class="card-img-top w-100" alt="Beasiswa Non-Akademik Image">
            <div class="card-body text-center">
                <h5 class="card-title mt-4">Beasiswa Non-Akademik</h5>
                <p class="card-text">Beasiswa untuk prestasi di luar akademik.</p>
                <a href="#" class="btn btn-primary mt-3" data-toggle="modal" data-target="#nonAkademikModal">Detail</a>
            </div>
        </div>

        <div class="card shadow-sm">
            <img src="{{ asset('/image/bidikmisi.jpg') }}" class="card-img-top w-100" alt="Beasiswa Penghargaan Image">
            <div class="card-body text-center">
                <h5 class="card-title mt-4">Beasiswa Penghargaan</h5>
                <p class="card-text">Beasiswa untuk pencapaian luar biasa dalam suatu bidang.</p>
                <a href="#" class="btn btn-primary mt-3" data-toggle="modal" data-target="#penghargaanModal">Detail</a>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <!-- Akademik Modal -->
    <div class="modal fade" id="akademikModal" tabindex="-1" role="dialog" aria-labelledby="akademikModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="akademikModalLabel">Beasiswa Akademik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Beasiswa Akademik diberikan kepada mahasiswa yang mencapai prestasi akademik yang sangat baik. Biasanya, penerima beasiswa ini memiliki nilai rapor atau IPK yang tinggi. Tujuan dari beasiswa akademik adalah untuk memberikan pengakuan dan dorongan kepada siswa yang menunjukkan keunggulan dalam pencapaian akademis mereka.</p>
                    <h6>Syarat:</h6>
                    <ul>
                        <li>Mahasiswa aktif semester 1 sampai dengan 8</li>
                        <li>Memiliki IPK di atas 3</li>
                        <li>Melampirkan berkas pendukung yaitu Nilai Raport</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Non-Akademik Modal -->
    <div class="modal fade" id="nonAkademikModal" tabindex="-1" role="dialog" aria-labelledby="nonAkademikModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nonAkademikModalLabel">Beasiswa Non-Akademik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Beasiswa Non-Akademik diberikan kepada individu yang menonjol di luar bidang akademis, seperti olahraga, seni, kepemimpinan, atau pelayanan masyarakat. Beasiswa ini menekankan prestasi di bidang-bidang non-akademis dan bertujuan untuk memberikan dukungan finansial kepada mereka yang telah menunjukkan keunggulan di luar kelas.</p>
                    <h6>Syarat:</h6>
                    <ul>
                        <li>Mahasiswa aktif semester 1 sampai dengan 8</li>
                        <li>Memiliki IPK di atas 3</li>
                        <li>Melampirkan berkas prestasi di luar akademik</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Penghargaan Modal -->
    <div class="modal fade" id="penghargaanModal" tabindex="-1" role="dialog" aria-labelledby="penghargaanModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="penghargaanModalLabel">Beasiswa Penghargaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Beasiswa Penghargaan diberikan sebagai bentuk pengakuan terhadap pencapaian luar biasa, dedikasi, atau kontribusi istimewa seseorang dalam suatu bidang. Beasiswa ini dapat diberikan kepada siswa, profesional, atau individu di berbagai tingkatan.</p>
                    <h6>Syarat:</h6>
                    <ul>
                        <li>Mahasiswa aktif semester 1 sampai dengan 8</li>
                        <li>Memiliki IPK di atas 3</li>
                        <li>Melampirkan sertifikat pendukung sebagai bukti pencapaian pada suatu bidang</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<style>
    .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    .card-title {
        font-weight: bold;
    }
    .modal-header {
        background-color: #36C2CE;
        color: white;
    }
    .modal-body ul {
        list-style-type: none;
        padding-left: 0;
    }
    .modal-body ul li::before {
        content: "✓ ";
        color: #dc3545;
    }
    .container {
        padding-bottom: 50px; /* Added padding at the bottom */
    }
    .simple-title {
        font-family: 'Arial', sans-serif;
        font-weight: 600;
        font-size: 2rem;
        color: #240750;
    }
</style>
