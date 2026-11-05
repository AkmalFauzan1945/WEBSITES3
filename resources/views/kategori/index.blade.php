<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kategori</title>
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

    <h1>KATEGORI</h1>

   <button><a href="{{ route('kategori.create') }}" class="btn-create" style="text-decoration: none;">Tambah Kategori</a></button>
    <button><a href="/" class="btn-create" style="text-decoration: none;">Back</a></button>

    <form method="GET" action="{{ route('kategori.index') }}">
    <input type="text" id="kategori" name="nama_kategori" placeholder="Cari Kategori" value="{{ request('nama_kategori') }}">
    <button type="submit">Cari</button>
</form>


        @if(session('success'))
        <h4 style="color:green">{{session('success')}}</h4>
        @endif

        @if(session('error'))
        <h4 style="color:red">{{session('error')}}</h4>
        @endif

   <table action="{{ route('kategori.create') }}">
   <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
<tbody>
    @forelse ($kategori as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_kategori }}</td>
            <td>
            <button><a href="{{ route('kategori.edit', ['id' => $item->id]) }}" class="btn-edit" style="text-decoration: none;">Edit</a></button>
            
            <form action="{{ route('kategori.destroy', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-delete">Hapus</button>
</form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Belum ada data kategori.</td>
        </tr>
    @endforelse
</tbody>
</table>


</body>
</html>