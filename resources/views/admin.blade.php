<!DOCTYPE html>
<html>
<head>
    <title>Data Dokumen Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-6 bg-gray-100">

<h2 class="text-xl font-bold mb-4">Dokumen Masuk</h2>

<table class="w-full bg-white shadow rounded">
    <tr class="bg-gray-200">
        <th class="p-2">Nama</th>
        <th class="p-2">Email</th>
        <th class="p-2">Dokumen</th>
        <th class="p-2">Download</th>
    </tr>

@foreach ($docs as $d)
<tr class="border-b">
    <td class="p-2">{{ $d->name }}</td>
    <td class="p-2">{{ $d->email }}</td>
    <td class="p-2">{{ $d->doc_type }}</td>
    <td class="p-2">
        <a href="{{ asset('storage/'.$d->file_path) }}" class="text-blue-600" download>Download PDF</a>
    </td>
</tr>
@endforeach

</table>

</body>
</html>
