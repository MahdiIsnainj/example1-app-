<!DOCTYPE html>
<html>
<head>
    <title>Kirim Dokumen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6 flex justify-center">

<div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">

<h2 class="text-xl font-bold mb-3">Kirim Surat Jaminan Informasi</h2>

@if(session('success'))
<div class="bg-green-200 p-3 mb-3">{{ session('success') }}</div>
@endif

<a href="/storage/files/surat-jaminan.pdf"
   download
   class="bg-blue-600 text-white p-2 rounded block mb-4 text-center">
   Download Surat Jaminan
</a> 

<form action="/submit" method="POST" enctype="multipart/form-data">
    @csrf

    <input name="name" class="w-full p-2 border mb-2" placeholder="Nama" required>

    <input name="email" class="w-full p-2 border mb-2" placeholder="Email" required>

    <textarea name="notes" class="w-full p-2 border mb-3" placeholder="Catatan (opsional)"></textarea>

    <label class="block mb-1 font-semibold">Upload PDF Hasil Scan</label>
    <input type="file" name="file" accept="application/pdf" required class="mb-4">

    <button class="bg-green-600 text-white px-4 py-2 rounded w-full">Kirim Dokumen</button>
</form>

</div>
</body>
</html>
