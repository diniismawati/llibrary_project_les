<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/databuku" method="POST">
        @csrf
        <h3>Data Buku</h3> <br>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori Id</th>
                    <th>Status</th>
                    <th>Picture</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $databuku as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->judul_buku}}</td>
                    <td>{{$item->penulis}}</td>
                    <td>{{$item->penerbit}}</td>
                    <td>{{$item->tahun_terbit}}</td>
                    <td>{{$item->kategori->nama_kategori}}</td>
                    <td>{{$item->status}}</td>
                    <td>{{$item->pictures}}</td>
                    <td>
                        @if (auth()->user()->role=="Pengelola")
                        <a href="/bukus/edit/{{ $item->id}}">Edit</a>
                        <a href="/hapusbuku/{{$item->id}}">Hapus</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</body>
</html>
