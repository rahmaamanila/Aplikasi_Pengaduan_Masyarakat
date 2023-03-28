<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use App\Tanggapan;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    // index pengaduan admin
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('pengaduan.index', compact('pengaduan'));
    }

    // create masyarakat
    public function create()
    {
        $pengaduan = Pengaduan::all();
        return view('masyarakat.create', compact('pengaduan'));
    }

    // store masyarakat
    public function store(Request $request)
    {
        // $messages = [
        //     'required' => 'Tidak boleh kosong',
        // ];

         $this->validate($request,[
            'isi_laporan' => 'required',
            'foto' => 'required'
         ]);

        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('image'), $imgName);

        Pengaduan::create([
    		'tgl_pengaduan' => date('Y-m-d'),
            'nik' => Auth::user()->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $imgName,
            'status' => '0'
    	]);
 
    	return redirect('/masyarakat')->with('Data ditambah', 'Laporan berhasil dikirim');
    }

    // ubah status admin
    public function statusOnchange($id){    
        $pengaduan = Pengaduan::with('user')->find($id);
        $pengaduan->status = request()->get('status');
        $pengaduan->save();
        return redirect()->back();
    }

    // detail pengaduan admin
    public function show($id)
    {
        $pengaduan = Pengaduan::with(['pengaduan', 'user'])->findOrFail($id);

        $data_tanggapan = Tanggapan::whereHas('pengaduan', function($query){
            $query->where('id_pengaduan', request()->route('id'));
        })->with('user')->first();

        return view('pengaduan.detail', compact('pengaduan', 'data_tanggapan'));
    }

    // detail pengaduan masyarakat
    public function showMasyarakat($id)
    {
        $pengaduan = Pengaduan::with(['pengaduan', 'user'])->findOrFail($id);

        $tanggapan = Tanggapan::where('id_pengaduan',$id)->first();

        return view('masyarakat.masyarakatdetail', compact('pengaduan', 'tanggapan'));
    }

    // laporan masyarakat
    public function laporanku()
    {
        $pengaduan = Auth()->user()->pengaduan;
        return view('masyarakat.laporanku',compact('pengaduan'));
    }

    // detail laporan masyarakat
    public function detaillaporanku($id) 
    {
        $detail_laporanku = Pengaduan::with('user')->find($id);
        $data_tanggapan = Tanggapan::whereHas('pengaduan', function($query){
            $query->where('id_pengaduan', request()->route('id'));
        })->with('user')->first();
        return view('/masyarakat/detaillaporanku', compact('detail_laporanku', 'data_tanggapan'));
    }

    public function edit($id)
    {
        $pengaduan = Pengaduan::where('id_pengaduan',$id)->first();
        return view('pengaduan.edit', compact('pengaduan'));
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

    // hapus pengaduan admin
    public function delete($id)
    {
        // Pengaduan::where('id_pengaduan',$id)->delete();
        // return redirect('/pengaduan');

        $pengaduan = Pengaduan::where('id_pengaduan',$id)->first();
        Tanggapan::where('id_pengaduan',$pengaduan->id_pengaduan)->delete();
        Pengaduan::where('id_pengaduan',$id)->delete();

        return redirect('/pengaduan');
    }
}
