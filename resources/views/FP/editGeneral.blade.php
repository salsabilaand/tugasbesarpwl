@extends('FP.parent')
@section('title', 'General')
@section('container')
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Edit Biodata</h5>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <form action="/general/update/{{$mahasiswa->id}}" method="post">
                            @csrf
                            <thead>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{ $mahasiswa->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Induk</td>
                                    <td>{{ $mahasiswa->nim }}</td>
                                </tr>
                                <tr>
                                    <td>Jurusan/Prodi</td>
                                    <td>{{ $mahasiswa->jurusan }} {{ $mahasiswa->prodi }}</td>
                                </tr>
                                
                                <tr>
                                    <td>Email</td>
                                    <td>
                                            <div class="form-group">
                                                <input type="email" class="form-control" required="required" name="email" value= "{{ $mahasiswa->email }}">
                                            </div>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td>
                                        <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
                                    </td>
                                </tr>
                            </form>    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection