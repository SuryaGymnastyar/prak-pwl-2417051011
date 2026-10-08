<style>
    .table-container {
        width: 100%;
        overflow-x: auto;
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        background-color: #1a1e36;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
        font-family: inherit;
    }

    .table thead tr {
        background-color: #121528;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .table th {
        color: #e5a93b;
        font-weight: 600;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 16px 20px;
    }

    .table tbody tr {
        border-bottom: 1px solid rgba(255, 255, 255, 0.04);
        transition: background-color 0.25s ease;
    }

    .table tbody tr:last-child {
        border-bottom: none;
    }

    .table tbody tr:hover {
        background-color: #212644;
    }

    .table td {
        padding: 16px 20px;
        color: #f1f3f9;
        font-size: 0.95rem;
    }

    .table td[style*="color: #1e293b"] {
        color: #f1f3f9 !important;
    }

    .badge-kelas {
        display: inline-block;
        background-color: rgba(229, 169, 59, 0.15);
        color: #e5a93b;
        border: 1px solid rgba(229, 169, 59, 0.3);
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .card_empty {
        text-align: center;
        padding: 32px 20px !important;
        color: #5d6778 !important;
        font-style: italic;
    }

    .btn-action-edit {
        padding: 6px 14px;
        background-color: rgba(229, 169, 59, 0.15);
        color: #e5a93b;
        border: 1px solid rgba(229, 169, 59, 0.4);
        border-radius: 10px;
        font-size: 0.85rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .btn-action-edit:hover {
        background-color: #e5a93b;
        color: #0d0f1d;
        transform: translateY(-2px);
    }

    .btn-action-delete {
        padding: 6px 14px;
        background-color: rgba(239, 68, 68, 0.15);
        color: #ef4444;
        border: 1px solid rgba(239, 68, 68, 0.35);
        border-radius: 10px;
        font-size: 0.85rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn-action-delete:hover {
        background-color: #ef4444;
        color: #ffffff;
        transform: translateY(-2px);
    }
</style>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th style="width: 70px;">ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th style="text-align: center; width: 180px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td style="font-weight: 500; color: #1e293b;">{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td>
                        <span class="badge-kelas">{{ $user->nama_kelas }}</span>
                    </td>

                    <td style="text-align: center;">
                        <div style="display: inline-flex; gap: 8px;">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn-action-edit">
                                Edit
                            </a>

                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Yakin ingin menghapus data {{ $user->nama }}?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action-delete">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="4" class="card_empty">Belum ada data pengguna yang tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>