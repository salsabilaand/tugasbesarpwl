@extends('FP.parent')
@section('title', 'Beranda')
@section('container')
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/slide1.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="image/slide2.jpg" class="d-block w-100" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <h1 class="mt-2">Pengumuman</h1>
            <div class="card">
                <h5 class="card-header">Email Siswa</h5>
                <div class="card-body">
                    <h5 class="card-title">Cara Mengakses Email Siswa :</h5>
                    <p class="card-text">
                        <ol>
                            <li>Akses URL https://mail.student.smkn1-jbg.ac.id</li>
                            <li>Masukkan Alamat email. Alamat email Anda adalah 1931710012@student.smkn1-jbg.ac.id</li>
                            <li>Masukkan Password. Password Anda adalah 25597962</li>
                        </ol>
                    </p>
                </div>
            </div>
            <div class="card mt-2">
                <h5 class="card-header">SPP</h5>
                <div class="card-body">
                    <h5 class="card-title">Pembayaran SPP</h5>
                    <p class="card-text">Pembayaran SPP bisa dilakukan di Loket Pembayaran. Siswa juga dapat mengajukan bantuan.</p>
                </div>
            </div>
            <div class="card mt-2">
                <h5 class="card-header">Kelas</h5>
                <div class="card-body">
                    <h5 class="card-title">Pembagian Kelas dan Pelajaran</h5>
                    <p class="card-text">Kelas dan jadwal pelajaran dapat dilihat di menu akademik</p>
                    <a href="{{ url ('/akademik') }}" class="btn btn-primary">Buka Akademik</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection