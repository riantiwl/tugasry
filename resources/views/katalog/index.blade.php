<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Katalog Produk</title>
</head>
<body>
    <h1>Katalog Produk</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $item)
                <tr>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['kategori'] }}</td>
                    <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td>{{ $item['stok'] > 0 ? 'Tersedia (' . $item['stok'] . ')' : 'Habis' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>