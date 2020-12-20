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
                        <a class="nav-link" href="/akademik">Pelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/akademik2">Nilai</a>
                    </li>
                    </ul>
                </div>
                <h5 class="card-header">Nilai</h5>            
                <div class="card-body">
                    <h5 class="card-title">Semester : 3</h5>
                        <table class="table">
                            <thead class="text-light bg-primary">    
                                <tr>    
                                    <th scope="col">Pelajaran</th>
                                    <th scope="col">Nilai</th>
                                </tr>    
                            </thead>    
                            <tbody>
                                @foreach($score as $sc)
                                    <tr>
                                    <th scope="row">{{ $sc->nama }}</th>
                                    <td>{{ $sc->nilai }}</td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        <a href="/akademik2/cetak_pdf" class="btn btn-primary" target="_blank">Cetak</a>    
                </div>
            </div>
        </div>            
    </div>
</div>
@endsection
