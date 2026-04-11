<!DOCTYPE html>
<html>
<head>
    <title>Stok Gudang Bahan Kue</title>
</head>
<body>
    <h1>Stok Gudang Toko Bahan Kue</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Bahan</th>
            <th>Stok</th>
            <th>Satuan</th>
        </tr>

        @foreach($stok as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['stok'] }}</td>
            <td>{{ $item['satuan'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>