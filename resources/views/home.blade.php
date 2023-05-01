@extends('layouts/main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body class="body">
    
    {{-- @include('partials/navbar') --}}

    <header class="container">
        <a href="/"><img src="img/logo.png" class="image-logo" alt="poving-logistic"></a>
        
        <p class="info-text"><img src="img/circle.png" width="12px" alt=""> DATANGLAH SAAT JAM KERJA (08:00 - 16.00)</p>
    </header>

    <div class="main-layout container">
        <div class="left-layout">
            <div class="main-title">
                Pinjam kebutuhan acaramu dengan mudah lewat Poving Logistic
            </div> 

            <div class="main-desc">
                Platform peminjaman sarana dan prasarana yang mudah digunakan. Tidak perlu buat akun. Eksklusif untuk sivitas akademika IT Telkom Purwokerto.
            </div>

            <div class="btn btn-block btn-danger">
                Ajukan Peminjaman
            </div>
        </div>

        <div class="right-layout">
            <img src="img/main-img.png" class="main-image" alt="image">

        </div>

    </div>

</body>
</html>