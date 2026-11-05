<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>STORE PAGES</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 5px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn-edit{
            text-decoration: none; 
            color: inherit;        
        }
        .btn-create{
            text-decoration: none; 
            color: inherit;        
        }
        .btn-delete{
            text-decoration: none; 
            color: inherit;        
        }
    </style>
</head>
<body>

    <h1>PRODUCT HOMEPAGE</h1>

   <button><a href="{{ route('product.create') }}" class="btn-create" style="text-decoration: none;">Tambah Produk</a></button>
   <button><a href="{{ route('product.index') }}" class="btn-create" style="text-decoration: none;">Back</a></button>

<table>
    <tr>
        <th>Kode</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stock</th>
    </tr>
    <tr>
        <td>{{ $kodeproduk }}</td>
        <td>{{ $namaproduk }}</td>
        <td>{{ $harga }}</td>
        <td>{{ $stok }}</td>
    </tr>
</table>

</body>
</html>