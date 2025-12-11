<!DOCTYPE html>
<html>
<head>
    <title>Data Dokumen Masuk</title>
    <link rel="stylesheet" href="{{ asset('css/style-admin.css') }}">
</head>

<body class="admin-body">

<div class="admin-container">

    <h2 class="admin-title">📄 Dokumen Masuk</h2>

    <table class="admin-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Jenis Dokumen</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($docs as $d)
            <tr>
                <td>{{ $d->name }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->doc_type }}</td>
                <td>
                    <a href="{{ asset('storage/'.$d->file_path) }}" class="btn-download" download>
                        Download PDF
                    </a>
                </td>
                <td>
                    <form action="{{ route('document.delete', $d->id) }}" method="POST"
                        onsubmit="return confirm('Hapus dokumen ini?')">
                        @csrf
                        @method('DELETE')

                        <button class="btn-delete">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

</body>
</html>
