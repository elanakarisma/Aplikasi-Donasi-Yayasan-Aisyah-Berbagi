@extends('layouts.admin')

@section('title', 'Edit Struktur Organisasi Yayasan Aisyah Berbagi')

@section('contents')
    <div class="container">
        <a href="{{ route('admin.struktur_yayasan') }}">
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
                        <h5 class="card-title text-center">Edit Struktur Organisasi Yayasan</h5>
                        <form action="/postEditStruktur/{{ $data->id_struktur_yayasan }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Nama Pengurus</label>
                                <textarea class="form-control" name="nama_pengurus" style="height: 250px" required>{{ $data->nama_pengurus }}</textarea>
                            </div>

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Jabatan</label>
                                <select class="form-control" name="jabatan" required>
                                    <option value="Pembina Yayasan Aisyah Berbagi"
                                        {{ $data->jabatan == 'Pembina Yayasan Aisyah Berbagi' ? 'selected' : '' }}>Pembina
                                        Yayasan Aisyah Berbagi</option>
                                    <option value="Ketua Yayasan Aisyah Berbagi"
                                        {{ $data->jabatan == 'Ketua Yayasan Aisyah Berbagi' ? 'selected' : '' }}>Ketua
                                        Yayasan Aisyah Berbagi</option>
                                    <option value="Sekretaris Yayasan Aisyah Berbagi"
                                        {{ $data->jabatan == 'Sekretaris Yayasan Aisyah Berbagi' ? 'selected' : '' }}>
                                        Sekretaris Yayasan Aisyah Berbagi</option>
                                    <option value="Bendahara Yayasan Aisyah Berbagi"
                                        {{ $data->jabatan == 'Bendahara Yayasan Aisyah Berbagi' ? 'selected' : '' }}>
                                        Bendahara Yayasan Aisyah Berbagi</option>
                                    <option value="Ketua Pengawas Yayasan Aisyah Berbagi"
                                        {{ $data->jabatan == 'Ketua Pengawas Yayasan Aisyah Berbagi' ? 'selected' : '' }}>
                                        Ketua Pengawas Yayasan Aisyah Berbagi</option>
                                    <option value="Anggota Yayasan Aisyah Berbagi"
                                        {{ $data->jabatan == 'Anggota Yayasan Aisyah Berbagi' ? 'selected' : '' }}>Anggota
                                        Yayasan Aisyah Berbagi</option>
                                </select>
                            </div>

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Foto Pengurus</label>
                                <input class="form-control mb-2" placeholder="Nama file lama: {{ $data->foto_pengurus }}"
                                    disabled>
                                <input class="form-control" type="file" name="foto_pengurus">
                                <div class="form-text">Maksimal ukuran foto fasilitas 5MB</div>
                                <img class="mt-3" style="width: 100px" src="{{ asset('/foto/' . $data->foto_pengurus) }}"
                                    alt="foto pengurus">
                            </div>

                            <button type="submit" class="btn btn-success mt-5">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </div>
@endsection
