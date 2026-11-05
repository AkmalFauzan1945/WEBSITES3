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
        .btn-edit {
            text-decoration: none; 
            color: inherit;        
        }
        .btn-create {
            text-decoration: none; 
            color: inherit;        
        }
        .btn-delete {
            text-decoration: none; 
            color: inherit;        
        }
    </style>
</head>
<body>

    <h1>SUPLIER</h1>

    <button><a href="{{ route('suplier.create') }}" class="btn-create" style="text-decoration: none;">Tambah Suplier</a></button>
    <button><a href="/" class="btn-create" style="text-decoration: none;">Back</a></button>

<table>
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Aksi</th>
    </tr>
    <tr>
        <td>{{ $nama }}</td>
        <td>{{ $alamat }}</td>
        <td>{{ $no_telp }}</td>
        <td>
            <button class="btn-edit">Edit</button>

                <button class="btn-delete">Hapus</button>
            </td>
    </tr>
</table>

</body>
</html>