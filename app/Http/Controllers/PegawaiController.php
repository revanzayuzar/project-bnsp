<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();

        return view('admin.pegawai.index')->with('pegawai', $pegawai);
    }

    public function create()
    {
        return view('admin.pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:16|unique:pegawais,nik',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|unique:pegawais,email',
            'nomor_telepon' => 'required|string|max:15|unique:pegawais,nomor_telepon',
            'status_pegawai' => 'required',
            'jabatan' => 'required|string|max:255',
            'gaji' => 'required|numeric',
            'pendidikan_terakhir' => 'required|string|max:255',
            'status_perkawinan' => 'required|string|max:255',
            'jumlah_anak' => 'required|integer',
        ]);

        $fotoPath = $request->file('foto')->store('foto_pegawai', 'public');

        $pegawai = new Pegawai();
        $pegawai->foto = $fotoPath;
        $pegawai->nama = $request->input('nama');
        $pegawai->nik = $request->input('nik');
        $pegawai->jenis_kelamin = $request->input('jenis_kelamin');
        $pegawai->tempat_lahir = $request->input('tempat_lahir');
        $pegawai->tanggal_lahir = $request->input('tanggal_lahir');
        $pegawai->alamat = $request->input('alamat');
        $pegawai->email = $request->input('email');
        $pegawai->nomor_telepon = $request->input('nomor_telepon');
        $pegawai->status_pegawai = $request->input('status_pegawai');
        $pegawai->jabatan = $request->input('jabatan');
        $pegawai->gaji = $request->input('gaji');
        $pegawai->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $pegawai->status_perkawinan = $request->input('status_perkawinan');
        $pegawai->jumlah_anak = $request->input('jumlah_anak');
        $pegawai->save();

        return redirect()->route('admin.pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        return view('admin.pegawai.read', compact('pegawai'));
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        return view('admin.pegawai.update', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:16|unique:pegawais,nik,' . $id,
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|unique:pegawais,email,' . $id,
            'nomor_telepon' => 'required|string|max:15|unique:pegawais,nomor_telepon,' . $id,
            'status_pegawai' => 'required',
            'jabatan' => 'required|string|max:255',
            'gaji' => 'required|numeric',
            'pendidikan_terakhir' => 'required|string|max:255',
            'status_perkawinan' => 'required|string|max:255',
            'jumlah_anak' => 'required|integer',
        ]);
    
        $pegawai = Pegawai::findOrFail($id);
    
        $pegawai->nama = $validatedData['nama'];
        $pegawai->nik = $validatedData['nik'];
        $pegawai->jenis_kelamin = $validatedData['jenis_kelamin'];
        $pegawai->tempat_lahir = $validatedData['tempat_lahir'];
        $pegawai->tanggal_lahir = $validatedData['tanggal_lahir'];
        $pegawai->alamat = $validatedData['alamat'];
        $pegawai->email = $validatedData['email'];
        $pegawai->nomor_telepon = $validatedData['nomor_telepon'];
        $pegawai->status_pegawai = $validatedData['status_pegawai'];
        $pegawai->jabatan = $validatedData['jabatan'];
        $pegawai->gaji = $validatedData['gaji'];
        $pegawai->pendidikan_terakhir = $validatedData['pendidikan_terakhir'];
        $pegawai->status_perkawinan = $validatedData['status_perkawinan'];
        $pegawai->jumlah_anak = $validatedData['jumlah_anak'];

        // Menghandle upload foto baru jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pegawai->foto) {
                Storage::disk('public')->delete($pegawai->foto);
            }

            // Simpan foto baru
            $fotoPath = $request->file('foto')->store('foto_pegawai', 'public');
            $pegawai->foto = $fotoPath;
        }

        $pegawai->save();

        return redirect()->route('admin.pegawai.index')->with('success', 'Pegawai berhasil diedit.');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($pegawai->foto) {
            Storage::disk('public')->delete($pegawai->foto);
        }

        $pegawai->delete();

        return redirect()->route('admin.pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
    }
}
