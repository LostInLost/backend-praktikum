<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function profile($id = null)
    {
        if (!$id) return view('not_found');
        $ppls = [
            '1' => [
                'nim' => 2321770004,
                'nama_lengkap' => 'Affansyah Hanan Windharto',
                'kelas' => 'PPLS-1A',
            ],
            '2' => [
                'nim' => 2321771003,
                'nama_lengkap' => 'Bagus Fary Ananta',
                'kelas' => 'PPLS-1A',
            ],
            '3' => [
                'nim' => 2321770006,
                'nama_lengkap' => 'Muhammad Naafiul Witjaksono',
                'kelas' => 'PPLS-1A',
            ],
            '4' => [
                'nim' => 2321771002,
                'nama_lengkap' => 'Odan Syaharta',
                'kelas' => 'PPLS-1A',
            ],
            '5' => [
                'nim' => 2321771001,
                'nama_lengkap' => 'Okan Syahdana',
                'kelas' => 'PPLS-1A',
            ],
            '6' => [
                'nim' => 2321770005,
                'nama_lengkap' => 'Silva Tria Alfares',
                'kelas' => 'PPLS-1A',
            ],
        ];

        return view('profile', [
            'data' => $ppls[$id] ?? null,
        ]);
    }


    public function kuliah()
    {
        return view('penglaman');
    }
}
