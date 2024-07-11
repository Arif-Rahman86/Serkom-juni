<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Improved Navbar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #36C2CE; /* Updated color to DC4C64 */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-nav .nav-item .nav-link {
            font-weight: bold;
            color: #fff !important; /* Changed text color to white */
            transition: background-color 0.3s, color 0.3s;
        }
        .navbar-nav .nav-item .nav-link.active {
            background-color: #F6F5F5; /* Changed active background color to white */
            color: #240750 !important; /* Changed active text color to DC4C64 */
        }
        .navbar-nav .nav-item .nav-link:hover {
            background-color: #fff; /* Changed hover background color to white */
            color: #240750 !important; /* Changed hover text color to DC4C64 */
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28220,76,100,0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mx-auto btn-group">
                <li class="nav-item">
                    <a class="nav-link btn {{ Route::is('pilihanbeasiswa') ? 'active' : '' }}" href="{{ route('pilihanbeasiswa') }}">Pilihan Beasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn {{ Route::is('daftar') ? 'active' : '' }}" href="{{ route('daftar') }}">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn {{ Route::is('hasil') ? 'active' : '' }}" href="{{ route('hasil') }}">Hasil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn {{ Route::is('grafik') ? 'active' : '' }}" href="{{ route('grafik') }}">Grafik</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
