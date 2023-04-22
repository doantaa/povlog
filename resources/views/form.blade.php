@extends('layouts/main')

@section('container')

<div class="row form-row">

    <div class="col-4 me-5">

        <div class="side-container">
            <a href="/"><span class="icon material-symbols-rounded">keyboard_backspace</span></a>
            <h1 class="form-title" style="font-family: 'Poppins">FORM PENGAJUAN</h1>
    
            <form action="">
                <div class="form-nim my-5">
                    <label for="">NIM</label><br>
                    <input type="text" class="form-control" placeholder="Masukkan NIM">
                </div>
    
                <div class="form-name my-5 pt-5">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
                </div>
    
                <div class="form-keperluan my-5 pt-5">
                    <label for="">Keperluan</label>
                    <input type="text" class="form-control" placeholder="contoh: Sosialisasi HMIF" > </textarea>
                </div>
    
                <div class="form-tanggal my-5 pt-5">
                    <label class="mb-3">Tanggal Peminjaman</label>
                    <div class="input-group date" id="tanggal-pinjam">
                        <input type="text" class="form-control">
                        <span class="input-group-addon material-symbols-rounded" style="transform: scale(2.5); background:none; border: 0">
                            date_range
                        </span>
                    </div>
                </div>
    
                <div class="form-tanggal my-5 pt-5">
                    <label class="mb-3">Tanggal Pengembalian</label>
                    <div class="input-group date" id="tanggal-kembali">
                        <input type="text" class="form-control">
                        <span class="input-group-addon material-symbols-rounded" style="transform: scale(2.5); background:none; border: 0">
                            date_range
                        </span>
                    </div>
                </div>
            </form>        
        </div>
    </div>

    <div class="col second-col" style="padding: 0">
        <div class="right-container">
            <h1 class="form-title text-dark pt-5 ms-0">
                DAFTAR BARANG
            </h1>
            <div class="card item-card mb-5" style="width: 764px;">
                <div class="row">
                    <div class="col">
                        <img src="item-1.png" style="width: 100px" alt="" class="ms-5">
                    </div>
                    <div class="col item-detail">
                        <p>NAMA ITEM</p>
                        <p>Deskripsi Item</p>
                    </div>

                    <div class="col item-amount">
                        <div class="row">
                            <div class="col"><a href="">+</a></div>
                            <div class="col">0</div>
                            <div class="col"><a href="">-</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card item-card mb-5" style="width: 764px;">
                <div class="row">
                    <div class="col">
                        <img src="item-1.png" style="width: 100px" alt="" class="ms-5">
                    </div>
                    <div class="col item-detail">
                        <p>NAMA ITEM</p>
                        <p>Deskripsi Item</p>
                    </div>

                    <div class="col item-amount">
                        <div class="row">
                            <div class="col"><a href="">+</a></div>
                            <div class="col">0</div>
                            <div class="col"><a href="">-</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn btn-block submit-btn">AJUKAN PEMINJAMAN</div>
        </div>
    </div>
</div>

@endsection



