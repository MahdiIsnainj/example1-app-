<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function admin() {
    return view('admin', [
        'docs' => Document::latest()->get()
    ]);
}

    public function index() {
        return view('upload');
    }

    public function submit(Request $req) {
        $path = $req->file('file')->store('docs', 'public');

        // $file = $req->file('file')->store('docs'); // otomatis ke storage/app/docs/

        Document::create([
            'name' => $req->name,
            'email' => $req->email,
            'doc_type' => 'Surat Jaminan Informasi',
            'notes' => $req->notes,
            'file_path' => $path,
        ]);

        return back()->with('success','Dokumen berhasil diupload');
    }

    public function list() {
        return view('admin', [
            'documents' => Document::orderBy('id','DESC')->get()
        ]);
    }
}
