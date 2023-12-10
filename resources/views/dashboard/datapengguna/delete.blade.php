<form method="POST" action="{{ route('datapengguna.destroy', $user->id) }}" class="d-inline">
    @method('delete')
    @csrf
    <input name="_method" type="hidden" value="DELETE">
    <button type="button" class="btn btn-xs btn-danger btn-flat" data-bs-toggle="modal"
        data-bs-target="#confirmDeleteModal{{ $user->id }}">Hapus
    </button>
    <div class="modal fade" id="confirmDeleteModal{{ $user->id }}" tabindex="-1"
        aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data {{ $user->name }}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                </div>
            </div>
        </div>
    </div>
</form>