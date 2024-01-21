@extends('index')
@section('isi')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Menu Lanjutan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Menu Lanjutan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <button type="button" class="btn btn-default bg-green float-sm-right mr-3" data-toggle="modal" data-target="#modal-lg">Tambah Pegawai</button>
      <!-- /.modal -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Pegawai</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="InputNama">NIP</label>
                        <input type="number" class="form-control" id="InputNama" placeholder="Nama project">
                    </div>
                    <div class="form-group">
                        <label for="InputKeterangan">Nama</label>
                    <input type="text" class="form-control" id="InputKeterangan" placeholder="Keterangan">
                    </div>
                    <div class="form-group">
                        <label for="InputKeterangan">Jabatan</label>
                    <input type="text" class="form-control" id="InputKeterangan" placeholder="Keterangan">
                    </div>

                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

  </div>

@endsection
