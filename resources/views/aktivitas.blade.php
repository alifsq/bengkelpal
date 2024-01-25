@extends('index')
@section('isi')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Aktivitas </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/tools">Home</a></li>
                        <li class="breadcrumb-item active">Aktivitas</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!--Button add data-->
    <div class="d-flex justify-content-end mb-2">
        <button type="button" class="btn btn-default bg-green sm-right mr-3 mb-3" data-toggle="modal" data-target="#modal-add-aktivitas">Tambah Aktivitas</button>
    </div>
    <!--/ End Button add data-->
    <!-- /.modal Add Data-->
    <div class="modal fade" id="modal-add-aktivitas">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Aktivitas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="/aktivitas">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="InputNama">Nama Aktivitas</label>
                                <input type="text" class="form-control" id="InputNama" placeholder="Nama Aktivitas" name="nama_project">
                            </div>
                            <!--/Date-->
                            <div class="form-group">
                                <label>Tanggal Mulai</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest" name="start_project">
                                    <input id="start_project" type="date" class="form-control " name="start_project" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Selesai</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input id="finish_project" type="date" class="form-control " name="finish_project" />
                                </div>
                            </div>
                            <div class="form-group">
                            <label>Status</label>
                            <select class="form-control select2bs4" style="width: 100%;" id="status_tools" name="status_tools">
                                <option value="Aktif">Aktif</option>
                                <option value="Non Aktif">Non Aktif</option>
                            </select>
                        </div>

                            <div class="form-group">
                                <label for="InputKeterangan">Keterangan</label>
                                <input type="text" class="form-control" id="InputKeterangan" placeholder="Keterangan" name="keterangan_project">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- /.modal-content -->
        </div>

        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal Add Data-->

</div>

@endsection
