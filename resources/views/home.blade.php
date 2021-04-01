@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Log Book</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/home/create" class="btn btn-sm btn-primary"> Tambah Data</a>
                    <hr>
                    <table class="table table-bordered" id="buku-tamu">
                        <thead>
                            <tr>
                                <th>ID</th>  
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Bidang</th>
                                <th>Nama Pengirim</th>
                                <th>Keterangan</th>
                                <th>Gambar</th>
                                <th>Kebijakan</th>
                                <th>Tanggal Input</th>
                                <th>Request</th>
                                <th width="50">Opsi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 
 
@push('scripts')
<script>
$(function() {
    $('#buku-tamu').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'home/jsonDatatables',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'tgl_mulai', name: 'tgl_mulai' },
            { data: 'tgl_selesai', name: 'tgl_selesai' },
            { data: 'bidang', name: 'bidang' },
            { data: 'nama_pengirim', name: 'nama_pengirim' },
            { data: 'keterangan', name: 'keterangan' },
            { data: 'gambar', name: 'gambar' },
            { data: 'kebijakan', name: 'kebijakan' },
            { data: 'created_at', name: 'created_at' },
            { data: 'request_id', name: 'request_id' },
            { data: 'action', name: 'action' }
        ]
    });
});
</script>
@endpush
