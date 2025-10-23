<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected function cars()
    {
        return [
            [
                'nama' => 'Nissan GT-R R34',
                'tahun' => 2008,
                'tipe' => 'JDM',
                'warna' => 'Silver Biru',
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Toyota Supra MK4',
                'tahun' => 2004,
                'tipe' => 'JDM',
                'warna' => 'Orange',
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Mazda RX-7 Spirit R',
                'tahun' => 2002,
                'tipe' => 'JDM',
                'warna' => 'Merah',
                'status' => 'Dipakai'
            ],
            [
                'nama' => 'Lamborghini Huracan EVO',
                'tahun' => 2023,
                'tipe' => 'Supercar',
                'warna' => 'Hitam',
                'status' => 'Dibengkel'
            ],
            [
                'nama' => 'Honda NSX Type R',
                'tahun' => 1998,
                'tipe' => 'Classic',
                'warna' => 'Putih',
                'status' => 'Tersedia'
            ],
        ];
    }

    public function dashboard(Request $request)
    {
        $username = $request->session()->get('username');
        return view('dashboard', ['username' => $username]);
    }

    public function login(Request $request)
    {
        if ($request->session()->has('username')) {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if ($data['username'] === 'adrian' && $data['password'] === 'adrian') {
            $request->session()->put('username', $data['username']);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['login' => 'Username atau password salah!'])->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->forget('username');
        return redirect()->route('dashboard');
    }

    public function pengelolaan(Request $request)
    {
        if (!$request->session()->has('username')) {
            return redirect()->route('dashboard');
        }

        $cars = $this->cars();
        return view('pengelolaan', compact('cars'));
    }

    public function profile(Request $request)
    {
        if (!$request->session()->has('username')) {
            return redirect()->route('dashboard');
        }

        $username = $request->session()->get('username');

        $profile = [
            'username' => $username,
            'status' => 'Kolektor Mobil Premium',
            'hobi' => 'Mengoleksi mobil langka dan mengikuti ajang otomotif',
            'member_since' => '2023'
        ];

        return view('profile', compact('profile'));
    }
}
