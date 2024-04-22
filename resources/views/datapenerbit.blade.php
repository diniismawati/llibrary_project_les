<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/datapenerbit" method="POST">
        @csrf
    <h3>Data Penerbit</h3> <br>
        <table border="1">
            <thead>
                <tr></tr>
                    <th>No</th>
                    <th>Nama Penerbit</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Option></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datapenerbit as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama_penerbit}}</td>
                    <td>{{$item->keterangan}}</td>
                    <td>{{$item->status}}</td>
                    <td>
                        @if (auth()->user()->role=="Pengelola")
                        <a href="/penerbit/edit/{{ $item->id}}">Edit</a>
                        <a href="/hapuspenerbit/{{$item->id}}">Hapus</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
</body>
</html>
