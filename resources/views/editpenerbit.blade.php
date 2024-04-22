<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/ubahpenerbit/{{$datapenerbit->id}}" method="POST">
        @csrf
        <small>Nama Penerbit</small> <br>
            <input type="text" name="nama_penerbit" id="" value="{{$datapenerbit->nama_penerbit}}"> <br>
            @error('nama_penerbit')
            @enderror
        <small>Keterangan</small> <br>
            <input type="text" name="keterangan" id="" value="{{$datapenerbit->keterangan}}"> <br>
            @error('keterangan')
            @enderror
            <br>
        <button type="sumbit">Simpan</button>
</body>
</html>
