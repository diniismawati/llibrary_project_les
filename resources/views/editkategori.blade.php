<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/ubahkategori/{{$datakategori->id}}" method="POST">
        @csrf
        <small>Nama Kategori</small> <br>
            <input type="text" name="nama_kategori" value="{{$datakategori->nama_kategori}}"> <br>
            @error('nama_kategori')
            @enderror
        <small>Keterangan</small> <br>
            <input type="text" name="keterangan" value="{{ $datakategori->keterangan}}"> <br>
            @error('keterangan')
            @enderror
        <button type="sumbit">Simpan</button>
    </form>
</body>
</html>
