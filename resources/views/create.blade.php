@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Log Book</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('home.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="tgl_mulai" class="col-md-4 col-form-label text-md-right">Tanggal Mulai</label>

                            <div class="col-md-6">
                                <input id="tgl_mulai" type="date" class="form-control datepicker" name="tgl_mulai" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl_selesai" class="col-md-4 col-form-label text-md-right">Tanggal Selesai</label>

                            <div class="col-md-6">
                                <input id="tgl_selesai" type="date" class="form-control" name="tgl_selesai" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bidang" class="col-md-4 col-form-label text-md-right">Bidang</label>

                            <div class="col-md-6">
                                <input id="bidang" type="text" class="form-control" name="bidang" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_pengirim" class="col-md-4 col-form-label text-md-right">Nama Pengirim</label>

                            <div class="col-md-6">
                                <input id="nama_pengirim" type="name" class="form-control" name="nama_pengirim" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="keterangan" class="col-md-4 col-form-label text-md-right">Keterangan</label>

                            <div class="col-md-6">
                                <input id="keterangan" type="text" class="form-control" name="keterangan" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gambar" class="col-md-4 col-form-label text-md-right">Gambar</label>

                            <div class="col-md-6">
                                <input id="gambar" type="file" class="form-control" name="gambar" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kebijakan" class="col-md-4 col-form-label text-md-right">Kebijakan</label>

                            <div class="col-md-6">
                                <input id="kebijakan" type="text" class="form-control" name="kebijakan" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="request_id" class="col-md-4 col-form-label text-md-right">Request</label>

                            <div class="col-md-6">
                                <select class="form-select form-select-lg mb-3" type="text" name="request_id" aria-label=".form-select-lg example">
                                    <option value="1">Pengembangan Aplikasi</option>
                                    <option value="2">Pengurangan Denda</option>
                                    <option value="3">Maintance Hardware</option>
                                  </select>
                                </select>
                            </div>
                            

                            
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
