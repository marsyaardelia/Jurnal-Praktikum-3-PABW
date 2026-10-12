@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <x-alert type="success" message="Laporan kejadian banjir Anda berhasil dikirim dan dicatat oleh sistem!" />

    <h2>Rincian Laporan yang Dikirim</h2>
    
    @include('partials.laporan-card', ['item' => $data])

    <a href="{{ route('lapor.index') }}" style="display: inline-block; margin-top: 15px; color: #0056b3; text-decoration: none;">&larr; Kembali ke Daftar Laporan</a>
@endsection




