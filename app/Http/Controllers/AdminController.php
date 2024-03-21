<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Buku;
use App\Models\Kategoribuku;
use App\Models\Kategoribuku_relasi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function registrasiadmin(){
        return view('register');
    }
    public function simpanadmin(Request $request){
        $m = new Admin();
        $cek = $request->validate([
            'Username'=>'required|max:10',
            'Password'=>'required|min:3',
            'Email'=>'required|min:6',
            'NamaLengkap'=>'required|max:13',
            'Alamat'=>'required|max:50',
            'level'=>'required|max:50'
        ]);
        $m->create($request->all());
        if ($m->where('Username',$request->input('Username'))->where('Password',$request->input('Password'))->exists()){
        return redirect('dataadmin');
        }
        return back()->with('pesan','registrasi gagal');
    }
    public function dataAdmin(){
        $m = new Admin();
        return view('dataadmin',['data'=>$m->all()]);
    }
    public function cekdataadmin(Request $request){
        $m = new Admin();
        $cek = $request->validate([
            'Username'=>'required',
            'Password'=>'required',
            'Email'=>'required',
            'NamaLengkap'=>'required',
            'Alamat'=>'required',
            'level'=>'required'
        ]);
        $m->create($request->all());
        return back();
    }

    public function adminlogin(){
        return view('login');
    }
    public function cekadminlogin(Request $request){
        $p = new Admin();
        if($p->where('Username',$request->input('Username'))->where('Password',$request->input('Password')) ->exists()){
         $petugas = $p->first();
            session(['petugas'=>$petugas]);
         return redirect('index');
        }
        return back()->with('pesan','username dan password belum terdaftar kakak');
    }

    public function editAdmin($id){
        $m = new Admin();
        return view('editadmin',['data'=>$m->find($id)]);
    }

    public function cekeditadmin(Request $request,$id){
        $validasi = $request->validate([
            'Username'=>'required',
            'Password'=>'required',
            'Email'=>'required',
            'NamaLengkap'=>'required',
            'Alamat'=>'required',
            'level'=>'required'
        ]);

        $admin = new Admin();
        $admin = $admin->find($id)->update($request->all());
        return redirect('dataadmin');
    }
    public function hapusadmin($AdminID){ 
        $admin = new Admin(); 
        $admin = $admin->find($AdminID); 
        $admin->delete(); 
        return back();
    }

    public function tambahBuku()
    {
        return view('tambahbuku');
    }
    public function cektambahbuku(Request $request){
        $cek = $request->validate([
            'Judul'=>'required'
        ]);
        $m = new Buku();
        $m->create($request->all());
        return redirect('databuku');
    }

    public function dataBuku(){
        $m = new Buku();
        return view('databuku',['data'=>$m->all()]);
    }
    public function cekdatabuku(Request $request){
        $m = new Buku();
        $cek = $request->validate([
            'Judul'=>'required',
            'Penulis'=>'required',            
            'Penerbit'=>'required',             
            'TahunTerbit'=>'required',        
            'Stok'=>'required'
        ]);
        $m->create($request->all());
        return back();
    }

    public function editBuku($id){
        $m = new Buku();
        return view('editbuku',['data'=>$m->find($id)]);
    }

    public function cekeditbuku(Request $request,$id){
        $validasi = $request->validate([
            'Judul'=>'required',
            'Penulis'=>'required',            
            'Penerbit'=>'required',             
            'TahunTerbit'=>'required',             
            'Stok'=>'required'
        ]);

        $buku = new Buku();
        $buku = $buku->find($id)->update($request->all());
        return redirect('databuku');
    }

    public function hapusbuku($BukuID){ 
        $buku = new Buku(); 
        $buku = $buku->find($BukuID); 
        $buku->delete(); 
        return back();
    }

    public function tambahKategori()
    {
        return view('tambahkategori');
    }
    public function cektambahkategori(Request $request){
        $cek = $request->validate([
            'NamaKategori'=>'required'
        ]);
        $m = new Kategoribuku();
        $m->create($request->all());
        return redirect('kategori');
    }

    public function dataKategori(){
        $m = new Kategoribuku();
        return view('kategori',['data'=>$m->all()]);
    }
    public function cekdatakategori(Request $request){
        $m = new Kategoribuku();
        $cek = $request->validate([
            'NamaKategori'=>'required'
        ]);
        $m->create($request->all());
        return back();
    }



    public function editKategori($id){
        $m = new Kategoribuku();
        return view('editkategori',['data'=>$m->find($id)]);
    }

    public function cekeditkategori(Request $request,$id){
        $validasi = $request->validate([
            'NamaKategori'=>'required'
        ]);

        $kategori = new Kategoribuku();
        $kategori = $kategori->find($id)->update($request->all());
        return redirect('kategori');
    }
    public function hapuskategori($KategoriID){ 
        $kategori = new Kategoribuku(); 
        $kategori = $kategori->find($KategoriID); 
        $kategori->delete(); 
        return back();
    }
    
    public function tambahRelasi()
    {
        return view('tambahrelasi');
    }
    public function cektambahrelasi(Request $request){
        $cek = $request->validate([
            'BukuID'=>'required',
            'KategoriID'=>'required'
        ]);
        $m = new Kategoribuku_relasi();
        $m->create($request->all());
        return redirect('relasi');
    }

    public function dataRelasi(){
        $m = new Kategoribuku_relasi();
        return view('relasi',['data'=>$m->all()]);
    }
    public function cekdatarelasi(Request $request){
        $m = new Kategoribuku_relasi();
        $cek = $request->validate([
            'BukuID'=>'required',
            'KategoriID'=>'required'
        ]);
        $m->create($request->all());
        return back();
    }
}
