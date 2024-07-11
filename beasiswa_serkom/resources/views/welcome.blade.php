<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Navbar Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    .navbar-nav .nav-link {
      border-radius: 0; /* Menghilangkan border-radius */
      min-width: 370px; /* Menetapkan lebar minimum */
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav mx-auto btn-group">
      <li class="nav-item">
        <a class="nav-link btn btn-outline-primary" href="#">Pilihan Beasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-outline-primary" href="#">Daftar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-outline-primary" href="#">Hasil</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-4">
    <h2 class="text-center">DAFTAR BEASISWA</h2>
    <form>
      <div class="form-group">
        <label for="nama">Masukkan Nama:</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
      </div>
      <div class="form-group">
        <label for="email">Masukkan Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Masukkan email">
      </div>
      <div class="form-group">
        <label for="nomorHp">Nomor HP:</label>
        <input type="tel" class="form-control" id="nomorHp" placeholder="Nomor HP">
      </div>
      <div class="form-group">
        <label for="semester">Semester Saat Ini:</label>
        <select class="form-control" id="semester">
          <option>Semester 1</option>
          <option>Semester 2</option>
          <!-- Tambahkan opsi semester lainnya sesuai kebutuhan -->
        </select>
      </div>
      <div class="form-group">
        <label for="ipk">IPK Terakhir:</label>
        <input type="text" class="form-control" id="ipk" placeholder="IPK" disabled>
      </div>
      <div class="form-group">
        <label for="pilihanBeasiswa">Pilihan Beasiswa:</label>
        <select class="form-control" id="pilihanBeasiswa">
          <option>Beasiswa A</option>
          <option>Beasiswa B</option>
          <!-- Tambahkan opsi beasiswa lainnya sesuai kebutuhan -->
        </select>
      </div>
      <div class="form-group">
        <label for="berkasSyarat">Upload Berkas Syarat:</label>
        <input type="file" class="form-control-file" id="berkasSyarat">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Daftar</button>
        <button type="button" class="btn btn-secondary">Batal</button>
      </div>
    </form>
  </div>


  

  <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
