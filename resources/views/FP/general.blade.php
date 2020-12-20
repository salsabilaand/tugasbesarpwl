@extends('FP.parent')
@section('title', 'General')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-2">Biodata Siswa</h1>
            <table class="table">
                <thead class="text-light bg-primary">
                    <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor Induk</th>
                    <th scope="col">Jurusan / Prodi</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $mahasiswa as $mhs)
                    <tr>
                    <th scope="row">{{ $mhs->nama }}</th>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->jurusan }} {{ $mhs->prodi }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>
                        <a href="general/edit/{{ $mhs->id }}" class="badge badge-warning">Edit</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ url ('/') }}" class="btn btn-warning">Log Out</a>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection