<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Antrian;

class AntrianController extends Controller
{
    public function index() {
        $data = Antrian::first()->get();
        return view('antrian.home', ['data' => $data]);
    }

    public function coba() {
        $data = new Antrian;
        $data->nomor_antrian = "A002";
        $data->nama = "Bambang";
        $data->nomor_ktp = "Yes";
        $data->tanggal_waktu = "2020-06-02 00:49:52";
        $data->status = 0;
        $data->key = "no"; 
        $data->save();
        echo "berhasil?";
    }
}
