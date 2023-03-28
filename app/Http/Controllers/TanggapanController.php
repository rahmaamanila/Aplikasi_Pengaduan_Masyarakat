<?php

namespace App\Http\Controllers;

use App\Tanggapan;
use App\Pengaduan;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TanggapanController extends Controller
{
    // index tanggapan admin
    public function index()
    {
        $tanggapan = Tanggapan::all();
        return view('tanggapan.index', compact('tanggapan'));
    }

    // tampil create tanggapan di dalam detail pengaduan admin
    public function create($id)
    {
        $detail_pengaduan = Pengaduan::with('pengaduan')->find($id);
        return view('pengaduan.detail', compact('detail_pengaduan'));
    }

    // create tanggapan di detail pengaduan admin
    public function store(Request $request)
    {
        // $pengaduan = Pengaduan::where('id_pengaduan', $request->id_pengaduan)->first();

        // $tanggapan = Tanggapan::where('id_pengaduan', $request->id_pengaduan)->first();

        // if ($tanggapan) {
        //     $pengaduan->update(['status' => $request->status]);

        //     $tanggapan->update([
        //         'id_pengaduan' => $request->id_pengaduan,
        //         'tgl_tanggapan' => date('Y-m-d'),
        //         'tanggapan' => $request->tanggapan,
        //         $id = Auth::user()->id
        //     ]);

        //     return redirect('pengaduan', compact('pengaduan', 'tanggapan'))->with(['status' => 'Berhasil Dikirim!']);
        // } else {
        //     $tanggapan = Tanggapan::create([
        //         'id_pengaduan' => $request->id_pengaduan,
        //         'tgl_tanggapan' => date('Y-m-d'),
        //         'tanggapan' => $request->tanggapan,
        //         $id = Auth::user()->id
        //     ]);

        //     return redirect('pengaduan', compact('pengaduan', 'tanggapan'))->with(['status' => 'Berhasil Dikirim!']);
        // }

        // DB::table('pengaduan')->where('id_pengaduan', $request->id_pengaduan)->update([
        //     'status'=> $request->status,
        // ]);

        // $tgl_tanggapan = date('Y-m-d H:i:s');
        // $id = Auth::user()->id;

        // $data = $request->all();
        
        // $data['tgl_tanggapan']=$tgl_tanggapan;
        // $data['id']=$id;

        // Tanggapan::create($data);
        // return redirect('/pengaduan');
        
        $data_tanggapan = new Tanggapan();
        $data_tanggapan->tgl_tanggapan = request()->get('tgl_tanggapan');
        $data_tanggapan->id_pengaduan = request()->get('id_pengaduan');
        $data_tanggapan->tanggapan = request()->get('tanggapan');
        $data_tanggapan->id = Auth::user()->id;
        $data_tanggapan->save();
        return redirect()->back();
    }   
}
