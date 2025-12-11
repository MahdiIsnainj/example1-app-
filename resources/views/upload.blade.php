<!DOCTYPE html>
<html>
<head>
    <title>Kirim Dokumen</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-gray-100 p-6 flex justify-center">

<div class="card">

<h2 class="title">Kirim Surat Jaminan Informasi</h2>

@if(session('success'))
<div class="alert-success">{{ session('success') }}</div>
@endif

<a href="/storage/files/surat-jaminan.pdf"
   download
   class="btn-primary mb-4 text-center block">
   Download Surat Jaminan
</a> 

<form action="/submit" method="POST" enctype="multipart/form-data">
    @csrf

    <input name="name" class="input" placeholder="Nama" required>

    <input name="email" class="input" placeholder="Email" required>

    <textarea name="notes" class="input textarea" placeholder="Catatan (opsional)"></textarea>

    <label class="label">Upload PDF Hasil Scan</label>
    <input type="file" name="file" accept="application/pdf" class="file-input" required>

    <button class="btn-success w-full">Kirim Dokumen</button>
</form>

</div>
</body>
</html>
