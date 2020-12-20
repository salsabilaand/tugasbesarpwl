@extends('FP.parent')
@section('title', 'SPP')
@section('container')
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
        <h1 class="mt-2">Pengajuan Bantuan SPP</h1>
            <div class="card">
                <div class="card-body">
                    <form action="/submission/create" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nim">Nomer Induk</label>
                            <input type="text" class="form-control"
                            required="required" name="nim"></br>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control"
                            required="required" name="nama"></br>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" class="form-control"
                            required="required" name="telepon"></br>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control"
                            required="required" name="nik"></br>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan Orang Tua</label>
                            <input type="text" class="form-control"
                            required="required" name="pekerjaan"></br>
                        </div>
                        <div class="form-group">
                            <label for="gaji">Gaji Orang Tua</label>
                            <input type="text" class="form-control"
                            required="required" name="gaji"></br>
                        </div>
                        <div class="form-group">
                            <label for="alasan">Alasan Anda Mengajukan Bantuan</label>
                            <textarea type="text" class="form-control"
                            required="required" name="alasan">
                            </textarea>
                        </div>
                        <button type="submit" name="add" class="btn btn-primary float-right">Submit</button>
                    </form>  
                </div>
            </div>
        </div>            
    </div>
</div>
@endsection
