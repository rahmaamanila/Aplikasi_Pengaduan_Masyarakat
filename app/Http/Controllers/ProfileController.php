<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function userProfile() {
        $province = Province::all();
        $district = District::all();
        $regency = Regency::all();
        $village = Village::all();
        $user = User::with('user')->findOrFail(Auth::user()->id);
        return view('profile.show', compact('user', 'province', 'regency', 'district', 'village'));
    }

    public function userProfileMas() {
        $province = Province::all();
        $district = District::all();
        $regency = Regency::all();
        $village = Village::all();
        $user = User::with('user')->findOrFail(Auth::user()->id);
        return view('profile.showmas', compact('user', 'province', 'regency', 'district', 'village'));
    }


    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('profile.show', compact('user'));
    }

    public function datakbptn(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        $option = "<option>Pilih Kabupaten</option>";

        foreach ($kabupatens as $kabupaten){
            $option .= "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }

        echo $option;
    }

    public function datakcmtn(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        $option = "<option>Pilih Kecamatan</option>";

        foreach ($kecamatans as $kecamatan){
            $option .= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }

    public function datads(Request $request)
    {
        $id_kecamatan = $request->id_kecamatan;

        $desas = Village::where('district_id', $id_kecamatan)->get();

        $option = "<option>Pilih Desa</option>";

        foreach ($desas as $desa){
            $option .= "<option value='$desa->id'>$desa->name</option>";
        }
        echo $option;
    }

    public function updateProfile(Request $request, $id)
    {
        $messages = [
            'required' => 'Tidak boleh kosong',
            'unique' => 'Sudah terdaftar',
            'numeric' => 'Hanya menginput angka'
        ];

        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'telp' => 'required|numeric',
            'alamat' => 'required',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'kode_pos' => 'required|numeric',
    	],$messages);

        User::where('id', $id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kode_pos' => $request->kode_pos,
    	]);
 
        // $data_user = new User();
        // $data_user->nik = request()->get('nik');
        // $data_user->nama = request()->get('nama');
        // $data_user->email = request()->get('email');
        // $data_user->password = bcrypt(request()->get('password'));
        // $data_user->telp = request()->get('telp');
        // $data_user->jenis_kel = request()->get('jenis_kel');
        // $data_user->alamat = request()->get('alamat');
        // $data_user->level = 'petugas ';
        // $data_user->rt = request()->get('rt');
        // $data_user->rw = request()->get('rw');
        // $data_user->kode_pos = request()->get('kode_pos');
        // $data_user->province_id = request()->get('province_id');
        // $data_user->regency_id = request()->get('regency_id');
        // $data_user->district_id = request()->get('district_id');
        // $data_user->village_id = request()->get('village_id');
        // $data_user->update();

    	return redirect()->back();
    }

    public function editmas($id)
    {
        $province = Province::all();
        $district = District::all();
        $regency = Regency::all();
        $village = Village::all();
        $user = User::where('id',$id)->first();
        return view('profile.showmas', compact('user','province',''));
    }

    public function datakabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        $option = "<option>Pilih Kabupaten</option>";

        foreach ($kabupatens as $kabupaten){
            $option .= "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }

        echo $option;
    }

    public function datakecamatan(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        $option = "<option>Pilih Kecamatan</option>";

        foreach ($kecamatans as $kecamatan){
            $option .= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }

    public function datadesa(Request $request)
    {
        $id_kecamatan = $request->id_kecamatan;

        $desas = Village::where('district_id', $id_kecamatan)->get();

        $option = "<option>Pilih Desa</option>";

        foreach ($desas as $desa){
            $option .= "<option value='$desa->id'>$desa->name</option>";
        }
        echo $option;
    }

    public function updateProfileMas(Request $request, $id)
    {
        $messages = [
            'required' => 'Tidak boleh kosong',
            'unique' => 'Sudah terdaftar',
            'numeric' => 'Hanya menginput angka'
        ];

        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'telp' => 'required|numeric',
            'alamat' => 'required',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'kode_pos' => 'required|numeric'
    	],$messages);

        User::where('id', $id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'telp' => $request->telp,
            'alamat' => $request->alamat, 
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kode_pos' => $request->kode_pos,
    	]);

    	return redirect()->back();
    }
}
