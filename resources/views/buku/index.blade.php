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
    @foreach($data_buku as $buku)
        <tr>
            <td>{{ $buku->id }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.') }}</td>
            <td>{{ Carbon\Carbon::parse($buku->tgl_terbit)->format('Y/m/d') }}</td>
        </tr>
    @endforeach
</tbody>
</table>
