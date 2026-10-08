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

    .toast-alert {
        position: fixed;
        bottom: 24px;
        right: 24px;
        z-index: 9999;
        padding: 10px 18px;
        border-radius: 8px;
        font-size: 0.9rem;
        font-weight: 500;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
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

        @if (session('success'))
            <div class="toast-alert" style="background: rgba(18, 21, 40, 0.95); border: 1px solid rgba(34, 197, 94, 0.4); color: #4ade80;">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="toast-alert" style="background: rgba(18, 21, 40, 0.95); border: 1px solid rgba(239, 68, 68, 0.4); color: #f87171;">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>
@endsection