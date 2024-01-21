@extends('index')
@section('isi')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tools </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/tools">Home</a></li>
              <li class="breadcrumb-item active">Tools</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <button type="button" class="btn btn-default bg-green float-sm-right mr-3" data-toggle="modal" data-target="#modal-lg">Tambah Alat</button>

      <!-- /.modal -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Alat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="InputKeterangan">Nama Alat</label>
                    <input type="text" class="form-control" id="InputKeterangan" placeholder="Nama Alat">
                    </div>
                    <div class="form-group">
                        <label for="InputNama">Jumlah</label>
                        <input type="number" class="form-control" id="InputNama" placeholder="Jumlah">
                    </div>
                    <div class="form-group">
                    <label>Status</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                        <option selected="selected">Aktif</option>
                        <option>Non Aktif</option>
                    </select>
                    </div>
                    <!--/Date-->
                    <div class="form-group">
                        <label>Tanggal Kalibrasi</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="date">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
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
