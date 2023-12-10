<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="/subkriteria/store">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Subkriteria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" name="id_kriteria" value="{{request()->id}}" id="">
                <div class="modal-body">
                    <div class="mb-3">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Subkriteria</label>
                        <input type="text" class="form-control border px-2" id="" name="nama_subkriteria"
                            placeholder="Nama Kriteria">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
        </form>
    </div>
</div>
</div>
