<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel">Hapus {{ $title }} ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
    <div class="row mb-2">
        <div class="col-6 font-weight-bold">Nama</div>
        <div class="col-6">: {{ $item->Nama }}</div>
    </div>

    <div class="row mb-2">
        <div class="col-6 font-weight-bold">Jabatan</div>
        <div class="col-6">: {{ $item->Jabatan }}</div>
    </div>

    <div class="row mb-2">
        <div class="col-6 font-weight-bold">Email</div>
        <div class="col-6">: {{ $item->Email }}</div>
    </div>

    <div class="row mb-2">
        <div class="col-6 font-weight-bold">Status</div>
        <div class="col-6">: {{ $item->is_tugas }}</div>
    </div>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        <form action="{{ route('userDestroy',$item->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>