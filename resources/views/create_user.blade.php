@extends('layouts.app')

@section('content')
<style>
    html, body {
        background-color: #0d0f1d !important;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .form-container {
        max-width: 500px;
        width: 100%;
        margin: 40px auto;
        padding: 0 20px;
        flex: 1;
    }

    .form-card {
        background-color: #121528;
        border-radius: 28px;
        padding: 36px 32px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .form-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 24px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .form-label {
        color: #e5a93b;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-control {
        width: 100%;
        background-color: #1a1e36;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 14px;
        padding: 12px 16px;
        color: #ffffff;
        font-family: inherit;
        font-size: 0.95rem;
        outline: none;
        transition: all 0.25s ease;
        box-sizing: border-box;
    }

    .form-control:focus {
        border-color: #e5a93b;
        background-color: #212644;
        box-shadow: 0 0 12px rgba(229, 169, 59, 0.2);
    }

    .form-control::placeholder {
        color: #5d6778;
    }

    select.form-control option {
        background-color: #121528;
        color: #ffffff;
    }

    .btn-submit {
        width: 100%;
        background-color: #e5a93b;
        color: #0d0f1d;
        border: none;
        border-radius: 14px;
        padding: 14px;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        margin-top: 10px;
        transition: all 0.25s ease;
        box-shadow: 0 4px 15px rgba(229, 169, 59, 0.25);
    }

    .btn-submit:hover {
        background-color: #f3b749;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(229, 169, 59, 0.35);
    }
</style>

<div class="form-container">
    <div class="form-card">
        <h1 class="form-title">Buat Pengguna Baru</h1>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama" required />
            </div>

            <div class="form-group">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM" required />
            </div>

            <div class="form-group">
                <label for="kelas_id" class="form-label">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="form-control" required>
                    <option value="" disabled selected>Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>
</div>
@endsection