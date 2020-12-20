@extends('FP.parent')
@section('title', 'Akademik')
@section('container')
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/akademik">Pelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/akademik2">Nilai</a>
                    </li>
                    </ul>
                </div>
                <h5 class="card-header">Pelajaran</h5>            
                <div class="card-body">
                    <h5 class="card-title">Kelas : MM-2</h5>
                        <table class="table">
                            <thead class="text-light bg-primary">    
                                <tr>    
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Pengajar</th>
                                </tr>    
                            </thead>    
                            <tbody>
                                @foreach($subject as $sb)
                                    <tr>
                                    <th scope="row">{{ $sb->nama }}</th>
                                    <td>{{ $sb->kode }}</td>
                                    <td>{{ $sb->pengajar }}</td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>    
                </div>
            </div>
        </div>            
    </div>
</div>
@endsection
