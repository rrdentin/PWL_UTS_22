<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $bukus = Buku::paginate(5); //Mengambil 5 isi tabel
        $posts = Buku::orderBy('kode_buku', 'asc')->paginate(5);
        return view('bukus.index', compact('bukus'), ['user'=>$user])
        ->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
                $user = Auth::user();

        return view('bukus.create', ['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
                $user = Auth::user();

        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Buku::create($request->all());
         //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('bukus.index', ['user'=>$user])
            ->with('success', 'Buku Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * 
     */
    public function show($kode_buku)
    {
                $user = Auth::user();

        $Buku = Buku::find($kode_buku);
        return view('bukus.detail', compact('Buku'), ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     */
    public function edit($kode_buku)
    {
                $user = Auth::user();

        $Buku = Buku::find($kode_buku);
        return view('bukus.edit', compact('Buku'), ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     */
    public function update(Request $request, $kode_buku)
    {
                $user = Auth::user();

        //melakukan validasi data
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Buku::find($kode_buku)->update($request->all());
        //jika data berhasil diupdate, akan kemabali ke halaman utama
        return redirect()->route('bukus.index', ['user'=>$user])
        ->with('success', 'Buku Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy($kode_buku)
    {
                $user = Auth::user();

        //fungsi eloquent untuk menghapus data buku
        Buku::find($kode_buku)->delete();
        return redirect()->route('bukus.index', ['user'=>$user])
        ->with('success', 'Buku Berhasil Dihapus');
    }

    //bonus
    public function search(Request $request){
                $user = Auth::user();

        $keyword = $request->search;
        $bukus = Buku::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        return view('bukus.index', compact('bukus'), ['user'=>$user])->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
