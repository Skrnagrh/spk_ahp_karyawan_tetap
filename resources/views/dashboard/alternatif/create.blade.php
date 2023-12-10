<form method="POST" action="/alternatif/store">
    @csrf
    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createLabel">Tambah Data Alternatif</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nomor Induk Karyawan</label>
                        <input type="text" class="form-control border px-2" id="" name="nik" required
                            placeholder="Nomor Induk Karyawan" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control border px-2" id="" name="nama" required
                            placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
