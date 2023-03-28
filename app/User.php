<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik', 'nama', 'email', 'password', 'telp', 'jenis_kel', 'level', 'alamat', 'rt', 'rw', 'kode_pos', 'province_id', 'regency_id', 'district_id', 'village_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pengaduan() {
        return $this->hasMany('App\Pengaduan', 'nik', 'nik');
    }

    public function tanggapan() {
        return $this->hasMany('App\Tanggapan');
    }

    public function province()
    {
        return $this->belongsTo('App\Models\Province');
    }

    public function regency()
    {
        return $this->belongsTo('App\Models\Regency');
    }

    public function district()
    {
        return $this->belongsTo('App\Models\District');
    }

    public function village()
    {
        return $this->belongsTo('App\Models\Village');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id');
    }
}
