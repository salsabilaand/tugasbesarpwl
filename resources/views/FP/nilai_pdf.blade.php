<!DOCTYPE html>
<html>
<head>
    <title>Cetak</title>
</head>
    <body>
        <style type="text/css">
        table tr td,
        table tr th{
        font-size: 9pt;
        }
    </style>
        <h5>Laporan Artikel</h4>
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
    </body>
</html>