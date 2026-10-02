@extends('layouts.app')

@section('content')
<style>
    html, body {
        background-color: #0d0f1d !important;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .page-container {
        max-width: 1000px;
        width: 100%;
        margin: 40px auto;
        padding: 0 20px;
        flex: 1; 
    }

    .card-panel {
        background-color: #121528;
        border-radius: 24px;
        padding: 32px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .page-header {
        margin-bottom: 28px;
    }

    .page-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 6px;
    }

    .page-subtitle {
        color: #a0aec0;
        font-size: 0.95rem;
    }
</style>

<div class="page-container">
    <div class="card-panel">
        <div class="page-header">
            <div>
                <h1 class="page-title">Daftar Pengguna</h1>
                <p class="page-subtitle">Data seluruh pengguna yang telah tersimpan</p>
            </div>
        </div>

        @include('components.table', ['items' => $users])
    </div>
</div>
@endsection