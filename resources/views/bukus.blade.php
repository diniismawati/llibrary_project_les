<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/buku" method="POST">
        @csrf
        <small>Judul Buku</small> <br>
            <input type="text" name="judul_buku" id="" value="{{old('judul_buku')}}"> <br>
            @error('judul_buku')
            <small>{{$message}}</small> <br>
            @enderror
        <small>Penulis</small> <br>
            <input type="text" name="penulis" id="" value="{{old('penulis')}}"> <br>
            @error('penulis')
            <small>{{$message}}</small> <br>
            @enderror
        <small>Penerbit</small> <br>
        <select name="" id="">
            <option value=""> --Silahkan Pilih Penerbit-- </option>
            @foreach ($penerbit as $item)
            <option value="{{$item->id}}">{{$item->nama_penerbit}}</option>
            @endforeach
        </select> <br>
        <small>Tahun Terbit</small> <br>
            <input type="int" name="tahun_terbit" id="" value="{{old('tahun_terbit')}}"> <br>
            @error('tahun_terbit')
            <small>{{$message}}</small> <br>
            @enderror
            <small>Kategori</small> <br>
            <select name="" id="">
                <option value=""> --Silahkan Pilih Kategori-- </option>
                @foreach ($kategori as $item)
                <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                @endforeach
            </select> <br>
            <button type="submit">Simpan</button>
    </form>
</body>
</html>
