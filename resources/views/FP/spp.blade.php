@extends('FP.parent')
@section('title', 'SPP')
@section('container')
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
        <h1 class="mt-2">Riwayat Pembayaran SPP</h1>
            <div class="card">
                <h5 class="card-header">Semester: 3</h5>
                <div class="card-body">
                <table class="table">
                            <thead class="text-light bg-primary">    
                                <tr>    
                                    <th scope="col">Nomer</th>
                                    <th scope="col">Tanggal Pembayaran</th>
                                    <th scope="col">Keterangan</th>
                                </tr>    
                            </thead>    
                            <tbody>
                                @foreach($spp as $spp)
                                    <tr>
                                    <th scope="row">{{ $spp->id }}</th>
                                    <td>{{ $spp->tanggal_pembayaran }}</td>
                                    <td><a href="#" class="badge badge-success">Lunas</a></td>
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
