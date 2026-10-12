@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')
    <h2>Daftar Laporan Banjir Terkini</h2>

    @forelse($laporan as $item)
        @include('partials.laporan-card', ['item' => $item])
    @empty
        <p>Belum ada laporan kejadian banjir saat ini.</p>
    @endforelse
@endsection


