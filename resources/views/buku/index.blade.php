<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>
<table class="table table striped">
    <thread>
        <tr>
            <th>id</th>
            <th>judul</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tgl. Terbit</th>
            <th>Aksi</th>
        </tr>
    </thread>
<tbody>
    <h1 align='center'>Daftar Buku</h1>
        <br>

        <p align='center'><a href="{{ route('buku.create') }}"> Tambah Buku </a> 
        </p>

    @foreach($data_buku as $buku)
        <tr>
            <td>{{ $buku->id }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.') }}</td>
            <td>{{ Carbon\Carbon::parse($buku->tgl_terbit)->format('Y/m/d') }}</td>
            <td>
            <form action="{{ route('buku.destroy', $buku->id) }}" method="post">
                            @csrf
                            <button onClick="return confirm('Mau hapus yakin?')">Hapus </button>
                        </form>

                        <br>
                        <a href="{{route('buku.edit', ['id' => $buku->id]) }}" class="btn btn-primary">Edit</a>
                        
</td>
        </tr>
    @endforeach
</tbody>

</table>
</body>
</html>