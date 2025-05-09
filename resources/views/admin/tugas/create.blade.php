@extends('layouts/app')

@section('content')
<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-plus mr-2"></i>
    {{ $title }}
</h1>

<div class="card">
    <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between bg-primary">
        <div class="mb-1 mr-2">
            <a href="{{ route('tugas') }}" class="btn btn-sm btn-success">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <div class="card-body">
        <form action="{{ route('tugasStore') }}" method="post">
            @csrf

            <!-- Baris pertama -->
            <div class="row mb-3">
                <div class="col-xl-12">
                    <label class="form-label"><span class="text-danger">*</span> Pilih Nama :</label>
                    <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                        <option disabled {{ old('user_id') ? '' : 'selected' }}>--Pilih Nama--</option>
                        @foreach ($user as $item)
                            <option value="{{ $item->id }}">{{ $item->Nama }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <!-- Baris kedua -->
            <!-- Baris kedua dan ketiga digabung -->
<div class="row mb-3">
    <div class="col-xl-6 mb-2">
        <label class="form-label"><span class="text-danger">*</span> Tanggal Mulai :</label>
        <input type="date" name="tanggal_mulai" class="form-control @error('tanggal_mulai') is-invalid @enderror">
        @error('tanggal_mulai')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-xl-6 mb-2">
        <label class="form-label"><span class="text-danger">*</span> Tanggal Selesai :</label>
        <input type="date" name="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror">
        @error('tanggal_selesai')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>


            <div class="row mb-3">
                <div class="col-xl-12">
                    <label class="form-label"><span class="text-danger">*</span>Tugas :</label>
                    <textarea name="tugas" rows="5" class="form-control @error('tugas') is-invalid @enderror"></textarea>
                    @error('tugas')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            <div>
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
