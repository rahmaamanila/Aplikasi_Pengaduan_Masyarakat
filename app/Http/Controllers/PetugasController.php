<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use App\Tanggapan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::all();
        
        return view('petugas.pengaduan.index', compact('pengaduan'));
    }

    public function statusOnchange($id){    
        $pengaduan = Pengaduan::with('user')->find($id);
        $pengaduan->status = request()->get('status');
        $pengaduan->save();
        return redirect()->back();
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::with(['pengaduan', 'user'])->findOrFail($id);

        $data_tanggapan = Tanggapan::whereHas('pengaduan', function($query){
            $query->where('id_pengaduan', request()->route('id'));
        })->with('user')->first();

        return view('petugas.pengaduan.detail', compact('pengaduan', 'data_tanggapan'));
    }

    public function delete($id)
    {
        Pengaduan::where('id_pengaduan',$id)->delete();
        return redirect('/petugas/pengaduan')->with('Data terhapus','Data berhasil dihapus!');
    }

    public function edit($id)
    {
        $pengaduan = Pengaduan::where('id_pengaduan',$id)->first();
        return view('petugas.pengaduan.edit', compact('pengaduan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tanggapan' => 'required'
    	]);

        Tanggapan::where('id_pengaduan', $id)->update([
    		'tanggapan' => $request->tanggapan
    	]);
 
    	return redirect()->back();
    }
}
