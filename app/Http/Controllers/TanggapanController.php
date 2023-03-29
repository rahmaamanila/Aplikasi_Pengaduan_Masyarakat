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
        $data_tanggapan = new Tanggapan();
        $data_tanggapan->tgl_tanggapan = request()->get('tgl_tanggapan');
        $data_tanggapan->id_pengaduan = request()->get('id_pengaduan');
        $data_tanggapan->tanggapan = request()->get('tanggapan');
        $data_tanggapan->id = Auth::user()->id;
        $data_tanggapan->save();
        return redirect()->back();
    }   
}
