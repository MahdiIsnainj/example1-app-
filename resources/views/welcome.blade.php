<table>
<tr>
    <th>Nama</th>
    <th>Email</th>
    <th>Dokumen</th>
</tr>

@foreach($docs as $d)
<tr>
    <td>{{ $d->name }}</td>
    <td>{{ $d->email }}</td>
    <td>
        <a href="{{ asset('template/surat-jaminan.pdf') }}" download>Download Surat apapun inpu</a>

</tr>
@endforeach
</table>
