<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use App\Tanggapan;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('halamandepan.dashboard',[
            'pengaduan' => Pengaduan::count(),
            'petugas' => User::where('level','=', 'PETUGAS')->count(),
            'masyarakat' => User::where('level','=', 'MASYARAKAT')->count(),
            'tanggapan' => Tanggapan::count(),
            'pending' => Pengaduan::where('status', '0')->count(),
            'proses' => Pengaduan::where('status', 'Proses')->count(),
            'selesai' => Pengaduan::where('status', 'Selesai')->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexmas()
    {
        return view('halamandepan.dashboardmas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
