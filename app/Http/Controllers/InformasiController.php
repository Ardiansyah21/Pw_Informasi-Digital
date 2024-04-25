<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

      public function index()
    {
        return view ('landing.page');
    }
    public function login()
    {
        return view('login.login');
    }
   
    public function admin()
    {
        $informasis = Informasi::orderBy('created_at' , 'DESC')->get();
        return view("dashboard.admin", compact('informasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

     public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists' => "This email doesn't exists"
        ]);

        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
        if(Auth::user()->role == 'admin'){
            return redirect()->route('admin');
        }elseIf(Auth::user()->role == 'petugas'){
            return redirect()->route('data.petugas');
        }
            return redirect()->route('data');
        } else {
            return redirect('/')->with('fail', "Gagal login, periksa dan coba lagi!");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store (Request $request)
    {
            $request->validate([
                'judul' => 'required',
                'nama' => 'required|min:3',
                'jurusan' => 'required',
                'rayon' => 'required',
                'deskripsi' => 'required|min:5',
                'foto' => 'required|image|mimes:jpeg,jpg,png,svg',
            ]);
    
            $image = $request->file('foto');
            $imgName = rand(). '.' .  $image->extension();
            $path = public_path('assets/image/');
            $image->move($path, $imgName);
    
            Informasi::create([
                'judul' => $request->judul,
                'nama' => $request->nama,
                'jurusan' => $request->jurusan,
                'rayon' => $request->rayon,
                'deskripsi' => $request->deskripsi,
                'foto' => $imgName,
    
            ]);
    
            return redirect()->back()->with('sucessAdd', 'Berhasil menambahkan data baru!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $informasis = Informasi::where('id', '=', $id)->firstOrFail();
        return view('landing.edit', compact('informasis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'nama' => 'required|min:3',
            'jurusan' => 'required',
            'rayon' => 'required',
            'deskripsi' => 'required|min:5',

        ]);

        if(is_null($request->file('foto'))) {
            $imgName = Informasi::where('id', '=', $id)->value('foto');
        }else{
            $image = $request->file('foto');
            $imgName = rand(). '.' .  $image->extension();
            $path = public_path('assets/image/');
            $image->move($path, $imgName);
        }
        // cari dlu datanya pke where, baru ubah
        Informasi::where('id', '=', $id)->update([
            'judul' => $request->judul,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'rayon' => $request->rayon,
            'deskripsi' => $request->deskripsi,
            'foto' => $imgName,

            

            
        ]);
        return redirect()->route('admin')->with('successUpdate', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    Informasi::where('id', '=', $id)->delete();
    return redirect()->back()->with('successDelete', 'Berhasil menghapus data!');
    }
}