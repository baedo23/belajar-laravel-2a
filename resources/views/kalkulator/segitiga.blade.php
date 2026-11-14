@extends('layouts.app')

@section('content')
<div class="card card-narrow">
    <div class="card-header">
        <div>
            <h1 class="card-title">Kalkulator Segitiga</h1>
            <p class="card-subtitle">Hitung luas bidang segitiga secara instan</p>
        </div>
        <span class="formula-tag">L = ½ × a × t</span>
    </div>

    <div class="card-body">
        <form action="{{ route('kalkulator.hitung') }}" method="POST" class="calc-form">
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label for="alas">Panjang Alas (cm)</label>
                    <input
                        type="number"
                        step="any"
                        id="alas"
                        name="alas"
                        placeholder="Contoh: 12"
                        value="{{ old('alas', $alas) }}"
                        required
                    >
                    @error('alas')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tinggi">Tinggi Segitiga (cm)</label>
                    <input
                        type="number"
                        step="any"
                        id="tinggi"
                        name="tinggi"
                        placeholder="Contoh: 8"
                        value="{{ old('tinggi', $tinggi) }}"
                        required
                    >
                    @error('tinggi')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-primary">Hitung Luas</button>
                @if (!is_null($luas))
                    <a href="{{ route('kalkulator.segitiga') }}" class="btn-ghost">Reset</a>
                @endif
            </div>
        </form>

        @if (!is_null($luas))
        <div class="result-box">
            <div class="result-meta">
                <span>Alas: <strong>{{ $alas }} cm</strong></span>
                <span>•</span>
                <span>Tinggi: <strong>{{ $tinggi }} cm</strong></span>
            </div>
            <div class="result-main">
                <span class="result-label">Total Luas Segitiga</span>
                <span class="result-value">{{ number_format($luas, 2, ',', '.') }} <small>cm²</small></span>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection