```blade
<div class="table-responsive">
    <table class="table table-bordered pixel-table mb-0">
        <thead>
            <tr>
                <th>UUID</th>
                <th>NAMA</th>
                <th>NPM</th>
                <th>KELAS</th>
                <th>AKSI</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->uuid }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->nama_kelas }}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <a href="{{ route('user.edit', $user->uuid) }}"
                               class="btn btn-sm btn-primary">
                                ✏️ EDIT
                            </a>

                            <form action="{{ route('user.destroy', $user->uuid) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus data mahasiswa ini?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger">
                                    🗑️ HAPUS
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data mahasiswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
```
