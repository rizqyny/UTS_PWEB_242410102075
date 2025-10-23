@extends('layouts.app')

@section('title', 'Pengelolaan Koleksi')

@section('content')
<div class="container mx-auto px-6 py-8 text-2xl">
    <h4 class="mb-6 text-2xl font-bold">Daftar Mobil di Garasi</h4>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-700 bg-white/5 rounded-xl">
            <thead class="bg-gradient-to-r from-purple-800/60 to-transparent text-left">
                <tr>
                    <th class="px-6 py-3 text-lg font-semibold">Nama Mobil</th>
                    <th class="px-6 py-3 text-lg font-semibold">Tahun</th>
                    <th class="px-6 py-3 text-lg font-semibold">Tipe</th>
                    <th class="px-6 py-3 text-lg font-semibold">Warna</th>
                    <th class="px-6 py-3 text-lg font-semibold">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
                @foreach ($cars as $car)
                <tr class="hover:bg-white/2 transition">
                    <td class="px-6 py-4 text-sm font-medium">{{ $car['nama'] }}</td>
                    <td class="px-6 py-4 text-sm">{{ $car['tahun'] }}</td>
                    <td class="px-6 py-4 text-sm">{{ $car['tipe'] }}</td>
                    <td class="px-6 py-4 text-sm">{{ $car['warna'] }}</td>
                    <td class="px-6 py-4 text-sm">
                        @if($car['status'] === 'Tersedia')
                            <span class="inline-block px-3 py-1 rounded-full bg-green-500/80 text-black text-xs font-semibold">{{ $car['status'] }}</span>
                        @elseif($car['status'] === 'Dibengkel')
                            <span class="inline-block px-3 py-1 rounded-full bg-red-500/80 text-white text-xs font-semibold">{{ $car['status'] }}</span>
                        @else
                            <span class="inline-block px-3 py-1 rounded-full bg-yellow-400/90 text-black text-xs font-semibold">{{ $car['status'] }}</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
