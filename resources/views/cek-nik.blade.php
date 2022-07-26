<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{ 
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="/cek-nik-store" method="post">
        @csrf
        <input type="text" name="search" id="">
        <button type="submit">Cari</button>
    </form>
    @if(isset($warga))
        <table>
            <tr>
                <th>NO KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>SHDRT</th>
            </tr>
            @foreach($warga as $w)
            <tr>
                <td>{{substr($w->nokk, 0, 8)}}********</td>
                <td>{{substr($w->nik, 0, 8)}}********</td>
                <td>{{$w->nama}}</td>
                <td>{{$w->shdrt}}</td>
            </tr>
            @endforeach
        </table>
    @endif
</body>
</html>