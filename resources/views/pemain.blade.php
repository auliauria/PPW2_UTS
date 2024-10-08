<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemain</title>
</head>
<body>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Pemain</th>
                <th>Nomor Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_pemain as $pemain)
            <tr>
                <td>{{ $pemain->id }}</td>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>