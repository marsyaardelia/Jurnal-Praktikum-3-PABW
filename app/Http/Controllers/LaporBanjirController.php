<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function index()
    {
        $laporan = [
            [
                'nama' => 'Ghariza',
                'lokasi' => 'Dayeuhkolot',
                'tinggi_air' => 25, 
                'tanggal' => '2026-10-9'
            ],
            [
                'nama' => 'Nazwa Shafa',
                'lokasi' => 'Baleendah',
                'tinggi_air' => 50,
                'tanggal' => '2026-10-10'
            ],
            [
                'nama' => 'Refani Anindya',
                'lokasi' => 'Bojongsoang',
                'tinggi_air' => 85,
                'tanggal' => '2026-10-11'
            ],
        ];

        return view('laporan.index', compact('laporan'));
    }

    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'tinggi_air' => $request->input('tinggi_air'),
            'tanggal' => date('Y-m-d H:i')
        ];

        return view('laporan.konfirmasi', compact('data'));
    }
}

