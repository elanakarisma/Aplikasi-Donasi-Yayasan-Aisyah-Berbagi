@extends('layouts.admin')

@section('title', 'Tambah Struktur Organisasi Yayasan Aisyah Berbagi')

@section('contents')
    <div class="container">
        <a href="{{ route('admin.tambahstruktur_yayasan') }}">
            <i class="bi-arrow-left h1"></i>
        </a>

        <div class="container mt-3">
            @if (Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (Session::get('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong> {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mt-4" style="width: 800px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tambah</h5>
                        <form action="{{ route('postTambahStruktur') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Nama Pengurus</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="nama_pengurus" required value="{{ old('nama_pengurus') }}">

                                <span class="text-danger">
                                    @error('nama_pengurus')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Jabatan</label>
                                <!-- Dropdown untuk jabatan -->
                                <select class="form-control" name="jabatan" required>
                                    <option value="Pembina Yayasan Aisyah Berbagi"
                                        {{ old('jabatan') == 'Pembina Yayasan Aisyah Berbagi' ? 'selected' : '' }}>Pembina
                                        Yayasan Aisyah Berbagi</option>
                                    <option value="Ketua Yayasan Aisyah Berbagi"
                                        {{ old('jabatan') == 'Ketua Yayasan Aisyah Berbagi' ? 'selected' : '' }}>Ketua
                                        Yayasan Aisyah Berbagi</option>
                                    <option value="Sekretaris Yayasan Aisyah Berbagi"
                                        {{ old('jabatan') == 'Sekretaris Yayasan Aisyah Berbagi' ? 'selected' : '' }}>
                                        Sekretaris Yayasan Aisyah Berbagi</option>
                                    <option value="Bendahara Yayasan Aisyah Berbagi"
                                        {{ old('jabatan') == 'Bendahara Yayasan Aisyah Berbagi' ? 'selected' : '' }}>
                                        Bendahara Yayasan Aisyah Berbagi</option>
                                    <option value="Ketua Pengawas Yayasan Aisyah Berbagi"
                                        {{ old('jabatan') == 'Ketua Pengawas Yayasan Aisyah Berbagi' ? 'selected' : '' }}>
                                        Ketua Pengawas Yayasan Aisyah Berbagi</option>
                                    <option value="Anggota Yayasan Aisyah Berbagi"
                                        {{ old('jabatan') == 'Anggota Yayasan Aisyah Berbagi' ? 'selected' : '' }}>Anggota
                                        Yayasan Aisyah Berbagi</option>
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label class="text-secondary mb-2">Foto Pengurus</label>
                                <input type="file" class="form-control" name="foto_pengurus">
                                <div class="form-text">Maksimal ukuran gambar 5Mb</div>
                            </div>

                            <button type="submit" class="btn btn-success mt-3">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </div>
@endsection
