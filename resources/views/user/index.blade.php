@extends ('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user mr-2"></i>
    {{ $title }}
</h1>

<div class="card">
    <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
        <div class="mb-1 mr-2">
            <a href="#" class="btn btn-sm btn-primary">
                <i class="fas fa-plus mr-2"></i>
                Tambah Data
            </a>
</div>
<div>
    <a href="#" class="btn btn-sm btn-success">
            <i class="fas fa-file-excel mr-2"></i>
                Excel
    </a>
    <a href="#" class="btn btn-sm btn-danger">
            <i class="fas fa-file-excel mr-2"></i>
            PDF
    </a>
</div>

<div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-primary text-white">
                                        <tr class="text-center">
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>
                                                <i class="fas fa-cog"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                        @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
    </div>
</div>

@endsection

