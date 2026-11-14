@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div>
            <h1 class="card-title">Daftar Mahasiswa</h1>
            <p class="card-subtitle">Data peserta aktif berdasarkan wilayah asal</p>
        </div>
        <span class="pill-count">{{ count($mahasiswa) }} Mahasiswa</span>
    </div>

    <div class="table-wrapper">
        <table class="modern-table">
            <thead>
                <tr>
                    <th style="width: 60px;">No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th class="text-right">Gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $index => $mhs)
                <tr>
                    <td class="text-muted">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                    <td>
                        <div class="user-cell">
                            <span class="avatar">{{ substr($mhs['nama'], 0, 1) }}</span>
                            <span class="user-name">{{ $mhs['nama'] }}</span>
                        </div>
                    </td>
                    <td>
                        <span class="city-text">{{ $mhs['alamat'] }}</span>
                    </td>
                    <td class="text-right">
                        <span class="badge {{ $mhs['gender'] === 'L' ? 'badge-male' : 'badge-female' }}">
                            {{ $mhs['gender'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection