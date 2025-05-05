<!-- Modal Delete -->
<div class="modal fade" id="modalDelete{{ $item->id }}" tabindex="-1" aria-labelledby="modalDeleteLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="modalDeleteLabel{{ $item->id }}">Hapus {{ $title }}?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-6 font-weight-bold">Nama</div>
                    <div class="col-6">: {{ $item->user->Nama }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-6 font-weight-bold">Jabatan</div>
                    <div class="col-6">: <span class="badge badge-info">{{ $item->user->Jabatan }}</span></div>
                </div>
                <div class="row mb-2">
                    <div class="col-6 font-weight-bold">Email</div>
                    <div class="col-6">: <span class="badge badge-primary">{{ $item->user->Email }}</span></div>
                </div>
                <div class="row mb-2">
                    <div class="col-6 font-weight-bold">Status</div>
                    <div class="col-6">: {{ $item->user->is_tugas }}</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                <form action="{{ route('tugasDestroy', $item->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Show -->
<div class="modal fade" id="modalTugasShow{{ $item->id }}" tabindex="-1" aria-labelledby="modalShowLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalShowLabel{{ $item->id }}">Detail {{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-6 font-weight-bold">Nama</div>
                    <div class="col-6">: {{ $item->user->Nama }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-6 font-weight-bold">Jabatan</div>
                    <div class="col-6">: <span class="badge badge-info">{{ $item->user->Jabatan }}</span></div>
                </div>
                <div class="row mb-2">
                    <div class="col-6 font-weight-bold">Email</div>
                    <div class="col-6">: <span class="badge badge-primary">{{ $item->user->Email }}</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
